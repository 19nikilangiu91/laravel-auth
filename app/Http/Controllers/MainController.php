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

    // Home Pubblica All Contents
    public function home()
    {
        $projects = Project::all();

        return view('pages.home', compact('projects'));
    }

    // Logged Privata All Contents
    public function logged()
    {
        $projects = Project::all();

        return view('pages.logged', compact('projects'));
    }
}