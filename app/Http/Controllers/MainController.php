<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Home Pubblica
    public function home()
    {
        return view('pages.home');
    }

    // Logged Privato
    public function logged()
    {
        return view('pages.logged');
    }
}