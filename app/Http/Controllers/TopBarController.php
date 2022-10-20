<?php

namespace App\Http\Controllers;

use App\Models\TopBar;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTopBarRequest;
use App\Http\Requests\UpdateTopBarRequest;

class TopBarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topBar = TopBar::all();
        return view('back.create.topBar',compact('topBar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topBar = TopBar::all();

        return view('back.create.topBar',compact('topBar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTopBarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeTopBar = new TopBar;
        $storeTopBar->name = $request->name;
        $storeTopBar->phone = $request->phone;
        $storeTopBar->email = $request->email;
        $storeTopBar->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TopBar  $topBar
     * @return \Illuminate\Http\Response
     */
    public function show(TopBar $topBar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TopBar  $topBar
     * @return \Illuminate\Http\Response
     */
    public function edit(TopBar $topBar,$id)
    {
        $edit = TopBar::find($id);
        return view('back.edit.topBar',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopBarRequest  $request
     * @param  \App\Models\TopBar  $topBar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopBar $topBar,$id)
    {
        $upadateTopBar = TopBar::find($id);
        $upadateTopBar->name = $request->name;
        $upadateTopBar->phone = $request->phone;
        $upadateTopBar->email = $request->email;
        $upadateTopBar->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TopBar  $topBar
     * @return \Illuminate\Http\Response
     */
    public function destroy(TopBar $topBar)
    {
        //
    }
}
