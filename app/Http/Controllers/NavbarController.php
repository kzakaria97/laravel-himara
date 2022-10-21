<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\Photonav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NavbarController extends Controller
{
    public function index() 
    {
        $navbar = Navbar::all();

        return view('back.create.navbar',compact('navbar'));
    }

    public function store(Request $request)
    {
        $storePhoto = new Photonav;
        Storage::put('public/img/', $request->file('url'));
        $storePhoto->url = $request->file('url')->hashName();
        $storePhoto->save();

        $store = new Navbar;
        $store->element = $request->element;
        $store->photonav_id = $request->photonav_id;
        $store->save();

        return redirect()->back();
        
    }
    public function edit(Navbar $navbar,$id)
    {
        $editNav = Navbar::find($id);
        $editPhoto = Photonav::all();

        return view('pages.edit.navbar',compact('editNav','editPhoto'));
    }
    public function update(Request $request,$id)
    {
        $updatePhoto = Photonav::find($id);
        
        if ($request->file('url') != null) {
            Storage::delete('public/img/' . $updatePhoto->url);
            Storage::put('public/img/', $request->file('url'));            
            $updatePhoto->url = $request->file('url')->hashName();
            $updatePhoto->save();
        }
        $updateNav = Navbar::find($id);
        $updateNav->element = $request->element;
        $updateNav->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $destroyNav = Navbar::find($id);
        $destroyPhoto = Photonav::find($id);
        Storage::delete('public/img/' . $destroyPhoto->photos->url);
        $destroyNav->delete();
        $destroyPhoto->delete();
        
        return redirect()->back();
    }
}
