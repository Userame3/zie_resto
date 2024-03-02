<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['menu'] = Menu::with('jenis')->get();
        $data['jenis'] = Jenis::all();
        return view('menu.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $imgay = $request->image;
        $imgayName = time() . '.' . $imgay->getClientOriginalExtension();
        // Storage::disk()->put('image', $imgay);
        $imgay->move(public_path('images'), $imgayName);
        $data['image'] = $imgayName;

        Menu::create($data);
        return redirect('menu')->with('success', 'Menu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return redirect('menu')->with('success', 'Data berhasil dihapus!');
    }
}
