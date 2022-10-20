<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorerestaurantRequest;
use App\Http\Requests\UpdaterestaurantRequest;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = restaurant::all();
        return view('back.create.restaurant',compact('restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurant = restaurant::all();
        return view('back.create.restaurant',compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorerestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeRestaurant = new Restaurant;
        $storeRestaurant->title = $request->title;
        $storeRestaurant->subtitle = $request->subtitle;
        Storage::put('public/img/', $request->file('img'));
        $storeRestaurant->img = $request->file('img')->hashName();
        $storeRestaurant->plat = $request->plat;
        $storeRestaurant->text = $request->text;
        $storeRestaurant->price = $request->price;
        $storeRestaurant->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(restaurant $restaurant,$id)
    {
        $editRestaurant = Restaurant::find($id);
        return view('back.edit.restaurant',compact('editRestaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterestaurantRequest  $request
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restaurant $restaurant,$id)
    {
        $updateRestaurant = Restaurant::find($id);
        $updateRestaurant->title = $request->title;
        $updateRestaurant->subtitle = $request->subtitle;
        $updateRestaurant->text = $request->text;
        $updateRestaurant->price = $request->price;
        $updateRestaurant->plat = $request->plat;
        if ($request->file('img') != null) {
            Storage::delete('public/img/' . $updateRestaurant->img);
            Storage::put('public/img/', $request->file('img'));            
            $updateRestaurant->img = $request->file('img')->hashName();
            $updateRestaurant->save();
        }

        $updateRestaurant->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(restaurant $restaurant,$id)
    {
        $destroyRestaurant = Restaurant::find($id);
        $destroyRestaurant->delete();

        return redirect()->back();
    }
}
