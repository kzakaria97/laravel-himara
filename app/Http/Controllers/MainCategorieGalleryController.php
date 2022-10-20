<?php

namespace App\Http\Controllers;

use App\Models\Categallerie;
use Illuminate\Http\Request;
use App\Models\CategorieGallerie;
use App\Models\Gallerie;

class MainCategorieGallerie extends Controller
{
    public function index()
    {
        $categorieGallerie = Categallerie::all();
        $gallerie = Gallerie::all();

        return view('pages.gallerie.index',compact('categorieGallerie','gallerie'));
    }
}

