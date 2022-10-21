<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Video;
use App\Models\Slider;
use App\Models\TopBar;
use App\Models\Service;
use App\Models\Gallerie;
use App\Models\restaurant;
use App\Models\Categallerie;
use App\Models\Navbar;
use App\Models\Photonav;
use Illuminate\Http\Request;
use App\Models\Serviceheader;

class HomeController extends Controller
{
    public function index() 
    {
        $topBar = TopBar::all();
        // $navbar = Navbar::all();
        $photoNav = Photonav::all();
        $about = About::all();
        $restaurant = restaurant::all();
        $video = Video::all();
        $slider = Slider::all();
        $serviceheader = Serviceheader::all();
        $service = Service::all();
        $categorieGallerie = Categallerie::all();
        $gallerie = Gallerie::all();

        return view('welcome',compact('topBar','about','restaurant','video','slider','serviceheader','service','categorieGallerie','gallerie','photoNav'));
    }
}
