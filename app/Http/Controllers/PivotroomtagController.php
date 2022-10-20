<?php

namespace App\Http\Controllers;

use App\Models\Pivotroomtag;
use App\Http\Requests\StorePivotroomtagRequest;
use App\Http\Requests\UpdatePivotroomtagRequest;

class PivotroomtagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePivotroomtagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePivotroomtagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pivotroomtag  $pivotroomtag
     * @return \Illuminate\Http\Response
     */
    public function show(Pivotroomtag $pivotroomtag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pivotroomtag  $pivotroomtag
     * @return \Illuminate\Http\Response
     */
    public function edit(Pivotroomtag $pivotroomtag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePivotroomtagRequest  $request
     * @param  \App\Models\Pivotroomtag  $pivotroomtag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePivotroomtagRequest $request, Pivotroomtag $pivotroomtag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pivotroomtag  $pivotroomtag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pivotroomtag $pivotroomtag)
    {
        //
    }
}
