<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategorieGallerie;
use App\Http\Requests\StoreCategorieGallerieRequest;
use App\Http\Requests\UpdateCategorieGallerieRequest;

class CategorieGallerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorieGallerie = CategorieGallerie::all();

        return view('back.create.categorieGallerie',compact('categorieGallerie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorieGallerie = CategorieGallerie::all();

        return view('back.create.categorieGallerie',compact('categorieGallerie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorieGallerieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeCategorieGallerie = new CategorieGallerie;
        $storeCategorieGallerie->name = $request->name;
        $storeCategorieGallerie->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieGallerie  $categorieGallerie
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieGallerie $categorieGallerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieGallerie  $categorieGallerie
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieGallerie $categorieGallerie,$id)
    {
        $editCategorieGallerie = CategorieGallerie::find($id);
        
        return view('back.edit.categorieGallerie',compact('editCategorieGallerie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieGallerieRequest  $request
     * @param  \App\Models\CategorieGallerie  $categorieGallerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieGallerie $categorieGallerie,$id)
    {
        $updateCategorieGallerie = CategorieGallerie::find($id);
        $updateCategorieGallerie->name = $request->name;
        $updateCategorieGallerie->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieGallerie  $categorieGallerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieGallerie $categorieGallerie,$id)
    {
        $destroyCategorieGallerie = CategorieGallerie::find($id);
        $destroyCategorieGallerie->delete();

        return redirect()->back();
    }
}
