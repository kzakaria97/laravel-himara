<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Roomcategorie;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Pivotroomservice;
use App\Models\Pivotroomtag;
use App\Models\Roomphoto;
use App\Models\Roomservice;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = Room::all();
        $roomcategorie = Roomcategorie::all();
        $tag = Tag::all();

        return view('back.create.room',compact('room','roomcategorie','tag'));
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
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storePivot = new Pivotroomtag;
        $storePivot->room_id = $request->room_id;
        $storePivot->tag_id = $request->tag_id;
        $storePivot->save();

        $storeP = new Pivotroomservice;
        $storeP->room_id = $request->room_id;
        $storeP->tag_id = $request->tag_id;
        $storeP->save();

        $store = new Room;
        $store->city = $request->city;
        $store->etoile = $request->etoile;
        $store->price = $request->price;
        $store->text = $request->text;
        $store->roomphoto_id = $request->roomphoto_id;
        $store->roomcategorie_id = $request->roomcategorie_id;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room,$id)
    {
        $editroom = Room::find($id);
        $editroomphoto = Roomphoto::all();
        $editroomservice = Roomservice::all();
        $editroomcategorie = Roomcategorie::all();
        return view('back.edit.room',compact('editroom','roomphoto','roomservice','roomcategorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room,$id)
    {
        $update = Room::find($id);
        $update->city = $request->city;
        $update->etoile = $request->etoile;
        $update->price = $request->price;
        $update->text = $request->text;
        $update->roomphoto_id = $request->roomphoto_id;
        $update->roomservice_id = $request->roomservice_id;
        $update->roomcategorie_id = $request->roomcategorie_id;

        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room,$id)
    {
        $destroy = Room::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
