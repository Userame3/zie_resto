<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Jenis;
use App\Http\Requests\JenisRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve data jenis with eager loading for categories
        $data['jenis'] = Jenis::all();
        return view('jenis.index')->with($data);
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
    public function store(JenisRequest $request)
    {
        Jenis::create($request->all());
        return redirect('jenis')->with('success', 'Data jenis berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JenisRequest $request, string $id)
    {
        // Validasi data yang dikirimkan
        $validatedData = $request->validated();
        // $update data jenis
        Jenis::find($id)->update($validatedData);

        return redirect('jenis')->with('success', 'Update data berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jenis, $id)
    {
        // dd($jenis);
        $jenis->find($id)->delete();
        return redirect('jenis')->with('success', 'Data berhasil dihapus!');
    }
}
