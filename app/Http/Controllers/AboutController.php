<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('back.create.about',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::all();
        return view('back.create.about',compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeAbout = new About;
        $storeAbout->title = $request->title;
        $storeAbout->subTitle = $request->subTitle;
        $storeAbout->description = $request->description;
        Storage::put('public/img/', $request->file('url'));
        $storeAbout->url = $request->file('url')->hashName();
        $storeAbout->etoile = $request->etoile;
        $storeAbout->titleCard = $request->titleCard;
        $storeAbout->textCard = $request->textCard;
        $storeAbout->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about,$id)
    {
        $editAbout = About::find($id);

        return view('back.edit.about',compact('editAbout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about,$id)
    {
        $updateAbout = About::find($id);
        $updateAbout->title = $request->title;
        $updateAbout->subTitle = $request->subTitle;
        $updateAbout->description = $request->description;
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $updateAbout->url);
            Storage::put('public/img/', $request->file('url'));            
            $updateAbout->url = $request->file('url')->hashName();
            $updateAbout->save();
        }
        $updateAbout->etoile = $request->etoile;
        $updateAbout->titleCard = $request->titleCard;
        $updateAbout->textCard = $request->textCard;
        $updateAbout->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
