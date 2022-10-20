<?php

namespace App\Http\Controllers;

use App\Models\Roomphoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRoomphotoRequest;
use App\Http\Requests\UpdateRoomphotoRequest;

class RoomphotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomphoto = Roomphoto::all();

        return view('back.create.roomphoto',compact('roomphoto'));
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
     * @param  \App\Http\Requests\StoreRoomphotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Roomphoto;
        Storage::put('public/img/', $request->file('url'));
        $store->url = $request->file('url')->hashName();
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roomphoto  $roomphoto
     * @return \Illuminate\Http\Response
     */
    public function show(Roomphoto $roomphoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roomphoto  $roomphoto
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomphoto $roomphoto,$id)
    {
        $edit = Roomphoto::find($id);
        return view('back.edit.roomphoto',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomphotoRequest  $request
     * @param  \App\Models\Roomphoto  $roomphoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roomphoto $roomphoto,$id)
    {
        $update = Roomphoto::find($id);
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $update->url);
            Storage::put('public/img/', $request->file('url'));            
            $update->url = $request->file('url')->hashName();
            $update->save();
        }
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roomphoto  $roomphoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomphoto $roomphoto,$id)
    {
        $destroy = Roomphoto::find($id);
        Storage::delete('public/img/' . $destroy->url);
        $destroy->delete();
        return redirect()->back();
    }
}
