<?php

namespace App\Http\Controllers;

use App\Models\Photonav;
use App\Http\Requests\StorePhotonavRequest;
use App\Http\Requests\UpdatePhotonavRequest;

class PhotonavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Http\Requests\StorePhotonavRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhotonavRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photonav  $photonav
     * @return \Illuminate\Http\Response
     */
    public function show(Photonav $photonav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photonav  $photonav
     * @return \Illuminate\Http\Response
     */
    public function edit(Photonav $photonav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhotonavRequest  $request
     * @param  \App\Models\Photonav  $photonav
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotonavRequest $request, Photonav $photonav)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photonav  $photonav
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photonav $photonav)
    {
        //
    }
}
