<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainteamController extends Controller
{
    public function index()
    {
        $team = DB::table('teams')->inRandomOrder()->get();
        $housekeeper = Team::all();
        return view('pages.team.index',compact('team','housekeeper'));
    }
}
