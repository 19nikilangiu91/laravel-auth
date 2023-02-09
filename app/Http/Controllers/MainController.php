<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il model "Project"
use App\Models\Project;

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

        return redirect()->route('home', 'logged');
    }

}