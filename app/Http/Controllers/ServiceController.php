<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();

        return view('back.create.service',compact('service'));
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
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Service;
        $store->icon = $request->icon;
        $store->title = $request->title;
        $store->text = $request->text;
        Storage::put('public/img/', $request->file('url'));
        $store->url = $request->file('url')->hashName();
        $store->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service,$id)
    {
        $edit = Service::find($id);
        return view('back.edit.service',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service,$id)
    {
        $update = Service::find($id);
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $update->url);
            Storage::put('public/img/', $request->file('url'));            
            $update->url = $request->file('url')->hashName();
            $update->save();
        }
        $update->title = $request->title;
        $update->icon = $request->icon;
        $update->text = $request->text;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service,$id)
    {
        $destroy = Service::find($id);
        Storage::delete('public/img/' . $destroy->url);
        $destroy->delete();
        return redirect()->back();
    }
}
