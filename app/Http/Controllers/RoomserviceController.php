<?php

namespace App\Http\Controllers;

use App\Models\Roomservice;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRoomserviceRequest;
use App\Http\Requests\UpdateRoomserviceRequest;

class RoomserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomservice = Roomservice::all();
        return view('back.create.roomservice',compact('roomservice')); 
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
     * @param  \App\Http\Requests\StoreRoomserviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Roomservice;
        $store->service = $request->service;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function show(Roomservice $roomservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomservice $roomservice,$id)
    {
        $edit = Roomservice::find($id);
        return view('back.edit.roomservice',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomserviceRequest  $request
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roomservice $roomservice,$id)
    {
        $update = Roomservice::find($id);
        $update->service = $request->service;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roomservice  $roomservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomservice $roomservice,$id)
    {
        $destroy = Roomservice::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
