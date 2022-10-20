<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('back.create.slider',compact('slider'));
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
     * @param  \App\Http\Requests\StoreSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Slider;
        Storage::put('public/img/', $request->file('url'));
        $store->url = $request->file('url')->hashName();
        $store->star = $request->star;
        $store->hotelname = $request->hotelname;
        $store->title = $request->title;
        $store->subtitle = $request->subtitle;
        $store->btnfirst = $request->btnfirst;
        $store->btnsecond = $request->btnsecond;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider,$id)
    {
        $edit = Slider::find($id);

        return view('back.edit.slider',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider,$id)
    {
        $update = Slider::find($id);
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $update->url);
            Storage::put('public/img/', $request->file('url'));            
            $update->url = $request->file('url')->hashName();
        }
        $update->star = $request->star;
        $update->hotelname = $request->hotelname;
        $update->title = $request->title;
        $update->subtitle = $request->subtitle;
        $update->btnfirst = $request->btnfirst;
        $update->btnsecond = $request->btnsecond;
        $update->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider,$id)
    {
        $destroy = Slider::find($id);
        Storage::delete('public/img/' . $destroy->url);
        $destroy->delete();
        return redirect()->back();
    }
}
