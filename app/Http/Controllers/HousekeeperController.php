<?php

namespace App\Http\Controllers;

use App\Models\Housekeeper;
use App\Http\Requests\StoreHousekeeperRequest;
use App\Http\Requests\UpdateHousekeeperRequest;

class HousekeeperController extends Controller
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
     * @param  \App\Http\Requests\StoreHousekeeperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHousekeeperRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function show(Housekeeper $housekeeper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function edit(Housekeeper $housekeeper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHousekeeperRequest  $request
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHousekeeperRequest $request, Housekeeper $housekeeper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Housekeeper $housekeeper)
    {
        //
    }
}
