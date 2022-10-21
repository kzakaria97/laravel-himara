<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateTeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('back.create.team',compact('team'));
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
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Team;
        $store->poste = $request->poste;
        $store->name = $request->name;
        $store->text = $request->text;
        Storage::put('public/img/', $request->file('url'));
        $store->url = $request->file('url')->hashName();
        $store->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team,$id)
    {
        $edit = Team::find($id);
        return view('back.edit.team',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team,$id)
    {
        $update = Team::find($id);
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $update->url);
            Storage::put('public/img/', $request->file('url'));            
            $update->url = $request->file('url')->hashName();
            $update->save();
        }
        $update->poste = $request->poste;
        $update->name = $request->name;
        $update->text = $request->text;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team,$id)
    {
        $destroy = Team::find($id);
        Storage::delete('public/img/' . $destroy->url);
        $destroy->delete();
        return redirect()->back();
    }
}
