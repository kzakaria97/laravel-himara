<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serviceheader;
use App\Http\Requests\StoreServiceheaderRequest;
use App\Http\Requests\UpdateServiceheaderRequest;

class ServiceheaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceheader = Serviceheader::all();
        return view('back.create.serviceheader',compact('serviceheader'));
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
     * @param  \App\Http\Requests\StoreServiceheaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Serviceheader;
        $store->title = $store->title;
        $store->subtitle = $store->subtitle;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serviceheader  $serviceheader
     * @return \Illuminate\Http\Response
     */
    public function show(Serviceheader $serviceheader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serviceheader  $serviceheader
     * @return \Illuminate\Http\Response
     */
    public function edit(Serviceheader $serviceheader,$id)
    {
        $edit = Serviceheader::find($id);
        return view('back.edit.serviceheader',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceheaderRequest  $request
     * @param  \App\Models\Serviceheader  $serviceheader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serviceheader $serviceheader,$id)
    {
        $update = Serviceheader::find($id);
        $update->title = $request->title;
        $update->subtitle = $request->subtitle;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serviceheader  $serviceheader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serviceheader $serviceheader,$id)
    {
        $destroy = Serviceheader::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
