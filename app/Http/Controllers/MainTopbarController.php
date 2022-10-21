<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\Photonav;
use App\Models\TopBar;
use Illuminate\Http\Request;

class MainTopbarController extends Controller
{
    public function index() 
    {
        $topbar = TopBar::all();
        $navbar = Navbar::all();
        $photoNav = Photonav::all();

        return view('partials.navbar',compact('topbar','navbar','photoNav'));
    }
}
