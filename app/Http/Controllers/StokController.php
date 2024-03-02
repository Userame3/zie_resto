<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Http\Requests\StoreStokRequest;
use App\Http\Requests\UpdateStokRequest;
use App\Models\Menu;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['menu'] = Menu::All();
        $data['stok'] = Stok::with('menu')->get();

        return view('stok.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStokRequest $request)
    {
        $stok = Stok::where('menu_id', $request->menu_id)->get()->first();
        if (!$stok) {
            Stok::create($request->all());
            return redirect('stok')->with('success', 'Data Stok berhasil di tambahkan!');
        }
        $stok->jumlah = (int)$stok->jumlah + (int)$request->jumlah;
        $stok->save();

        return redirect('stok')->with('success', 'Data Stok berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStokRequest $request, Stok $stok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Stok::find($id)->delete();
        return redirect('stok')->with('success', 'Data Stok Berhasil di Delete');
    }
}
