<?php

namespace App\Http\Controllers;

use App\Models\Categallerie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategallerieRequest;
use App\Http\Requests\UpdateCategallerieRequest;

class CategallerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorieGallerie = Categallerie::all();

        return view('back.create.categorieGallerie',compact('categorieGallerie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorieGallerie = Categallerie::all();

        return view('back.create.categorieGallerie',compact('categorieGallerie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategallerieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeCategorieGallerie = new Categallerie;
        $storeCategorieGallerie->name = $request->name;
        $storeCategorieGallerie->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categallerie  $categallerie
     * @return \Illuminate\Http\Response
     */
    public function show(Categallerie $categallerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categallerie  $categallerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categallerie $categallerie,$id)
    {
        $editCategorieGallerie = Categallerie::find($id);
        
        return view('back.edit.categorieGallerie',compact('editCategorieGallerie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategallerieRequest  $request
     * @param  \App\Models\Categallerie  $categallerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categallerie $categallerie,$id)
    {
        $updateCategorieGallerie = Categallerie::find($id);
        $updateCategorieGallerie->name = $request->name;
        $updateCategorieGallerie->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categallerie  $categallerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categallerie $categallerie,$id)
    {
        $destroyCategorieGallerie = Categallerie::find($id);
        $destroyCategorieGallerie->delete();

        return redirect()->back();
    }
}
