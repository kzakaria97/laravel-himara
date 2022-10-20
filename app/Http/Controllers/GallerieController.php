<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use App\Models\Categallerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreGallerieRequest;
use App\Http\Requests\UpdateGallerieRequest;

class GallerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = Categallerie::all();
        $gallerie = Gallerie::all();

        return view('back.create.gallerie',compact('cate','gallerie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Categallerie::all();
        $gallerie = Gallerie::all();

        return view('pages.gallerie.index',compact('cate','gallerie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGallerieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeGallerie = new Gallerie;
        Storage::put('public/img/', $request->file('url'));
        $storeGallerie->url = $request->file('url')->hashName();
        $storeGallerie->namePhoto = $request->namePhoto;
        $storeGallerie->categallerie_id = $request->categallerie_id;
        $storeGallerie->save();

        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function show(Gallerie $gallerie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallerie $gallerie,$id)
    {
        $editCate = Categallerie::all();
        $editGallerie = Gallerie::find($id);

        return view('back.edit.gallerie',compact('editCate','editGallerie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGallerieRequest  $request
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallerie $gallerie,$id)
    {
        $updateGallerie = Gallerie::find($id);
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $updateGallerie->url);
            Storage::put('public/img/', $request->file('url'));            
            $updateGallerie->url = $request->file('url')->hashName();
            $updateGallerie->save();
        }
        $updateGallerie->namePhoto = $request->namePhoto;
        $updateGallerie->categallerie_id = $request->categallerie_id;
        $updateGallerie->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallerie $gallerie,$id)
    {
        $destroyGallerie = Gallerie::find($id);
        Storage::delete('public/img/' . $destroyGallerie->url);
        $destroyGallerie->delete();
        return redirect()->back();
    }
}
