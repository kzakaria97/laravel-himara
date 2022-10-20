<?php

namespace App\Http\Controllers;

use App\Models\TopBar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index() 
    {
        $topbar = TopBar::all();

        return view('partials.navbar',compact('topbar'));
    }
}
