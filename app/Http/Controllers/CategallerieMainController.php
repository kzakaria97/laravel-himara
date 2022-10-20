<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use App\Models\Categallerie;
use Illuminate\Http\Request;

class CategallerieMainController extends Controller
{
    public function index()
    {
        $categorieGallerie = Categallerie::all();
        $gallerie = Gallerie::all();

        return view('pages.gallerie.index',compact('categorieGallerie','gallerie'));
    }
}
