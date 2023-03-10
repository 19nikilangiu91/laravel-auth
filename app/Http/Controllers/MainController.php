<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il model "Project"
use App\Models\Project;

// Importo lo "storage"
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    // Home Pubblica
    // public function home()
    // {
    //     return view('pages.home');
    // }

    // Home Pubblic All Contents
    public function home()
    {
        $projects = Project::all();

        return view('pages.home', compact('projects'));
    }

    // Logged Private All Contents
    public function logged()
    {
        $projects = Project::all();

        return view('pages.logged', compact('projects'));
    }

    // Show Public Single Content
    public function projectShow(project $project)
    {
        return view('pages.projectShow', compact('project'));
    }

    // Show Logged Private Single Content
    public function loggedProjectShow(project $project)
    {
        return view('pages.loggedShow', compact('project'));
    }

    // Delete Project For Public and Private
    public function projectDelete(project $project)
    {

        $project->delete();

        return redirect()->route('home');
    }

    // Create Logged Private Single Content
    public function projectCreate()
    {

        return view('pages.projectCreate');
    }

    // Store Single Content for Public and Private
    public function projectStore(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|max:64|unique:projects,name',
            'description' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'release_date' => 'required|date',
            'repo_link' => 'required|string|unique:projects,repo_link',
        ]);

        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;

        $project = Project::create($data);

        return redirect()->route('home', $project);
    }

    // Edit Single Content for Public and Private
    public function projectEdit(Project $project)
    {

        return view('pages.projectEdit', compact('project'));
    }

    // Update Single Content for Public and Private
    public function projectUpdate(Request $request, Project $project)
    {

        $data = $request->validate([
            'name' => 'required|string|max:64|unique:projects,name,' . $project->id,
            'description' => 'nullable|string',
            'main_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'release_date' => 'required|date',
            'repo_link' => 'required|string|unique:projects,repo_link,' . $project->id,
        ]);

        $img_path = Storage::put('uploads', $data['main_image']);
        $data['main_image'] = $img_path;

        $project->update($data);

        $project->save();

        return redirect()->route('home', $project);
    }

}