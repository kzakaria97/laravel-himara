<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomcategorie;
use App\Http\Requests\StoreRoomcategorieRequest;
use App\Http\Requests\UpdateRoomcategorieRequest;

class RoomcategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomcategorie = Roomcategorie::all();
        return view('back.create.roomcategorie',compact('roomcategorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomcategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Roomcategorie;
        $store->name = $request->name;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roomcategorie  $roomcategorie
     * @return \Illuminate\Http\Response
     */
    public function show(Roomcategorie $roomcategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roomcategorie  $roomcategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomcategorie $roomcategorie,$id)
    {
        $edit = Roomcategorie::find($id);
        return view('back.edit.roomcategorie',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomcategorieRequest  $request
     * @param  \App\Models\Roomcategorie  $roomcategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roomcategorie $roomcategorie,$id)
    {
        $update = Roomcategorie::find($id);
        $update->name = $request->name;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roomcategorie  $roomcategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomcategorie $roomcategorie,$id)
    {
        $destroy = Roomcategorie::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
