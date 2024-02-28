<?php

namespace App\Http\Controllers;

use App\Models\Quantity;
use App\Http\Requests\StoreQuantityRequest;
use App\Models\Menu;
use App\Http\Requests\UpdateQuantityRequest;

class QuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['menu'] = Menu::all();
        $data['qty'] = Quantity::with('menu');
        return view('quantity.index')->with($data);
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
    public function store(StoreQuantityRequest $id)
    {
        Quantity::find($id)->create();
        return view('quantity.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quantity $quantity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quantity $quantity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuantityRequest $request, Quantity $quantity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quantity $quantity)
    {
        //
    }
}
