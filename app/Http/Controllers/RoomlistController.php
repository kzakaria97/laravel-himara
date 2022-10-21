<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Roomcategorie;
use App\Models\Roomphoto;
use App\Models\Roomservice;
use App\Models\Tag;
use Illuminate\Http\Request;

class RoomlistController extends Controller
{
    public function index()
    {
        $room = Room::all();
        $roomtag = Tag::all();
        $roomPhoto = Roomphoto::all();
        $roomService = Roomservice::all();
        $roomcategorie = Roomcategorie::all();

        return view('pages.roomList.index',compact('roomtag','room','roomPhoto','roomService','roomcategorie'));
    }
}
