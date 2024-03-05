<?php

namespace App\Http\Controllers;

use App\Models\Titipan;
use App\Http\Requests\StoreTitipanRequest;
use App\Http\Requests\UpdateTitipanRequest;

class TitipanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['titipan'] = Titipan::all();
        return view('produktitipan.index')->with($data);
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
    public function store(StoreTitipanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Titipan $titipan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Titipan $titipan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTitipanRequest $request, Titipan $titipan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Titipan $titipan)
    {
        //
    }
}
