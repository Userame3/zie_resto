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
        try {
            // Retrieve data jenis with eager loading for categories
            $jenis = Jenis::get();
            return view('jenis.index', ['title' => 'Jenis', 'jenis' => $jenis]);
        } catch (QueryException | Exception | PDOException $error) {
            // Handle the error gracefully
            return 'Error: ' . $error->getMessage() . ' Code: ' . $error->getCode();
    }
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
        try {

            Jenis::create($request->all()); //query input ke table
            return redirect('jenis')->with('success', 'Data jenis berhasil ditambahkan!');
        } catch (QueryException | Exception | PDOException $error) {

            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
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
    public function update(JenisRequest $request, Jenis $jenis)
    {
        try{
            // Validasi data yang dikirimkan
            $validatedData = $request->validated();
            // $update data kategori
            $jenis->update($validatedData);
            
            return redirect('jenis')->with('success', 'Update data berhasil!');
        } catch ( \Exception $error) {
            // Tangani kesalahan jika terjadi error
            return 'Terjadi kesalahan : ' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jenis, $id)
    {
        // dd($jenis);
        try {
            $jenis->find($id)->delete();
            return redirect('jenis')->with('success', 'Data berhasil dihapus!');
        } catch (QueryException | Exception | PDOException  $error) {
            $this->failResponse($error->getMessage() . $error->getCode());
        }
    }
}
