<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKelasRequest;
use App\Http\Requests\UpdateKelasRequest;
use App\Models\Kelas;
use Illuminate\Support\Facades\Session;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "test";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelasRequest $request)
    {
        Session::flash('pesan', 'Sukses Tambah Kelas');
        Kelas::create([
            "nama_kelas" => $request->kelas,
        ]);
        return redirect("kelas");
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $crudClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $crudClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $crudClass)
    {
        Session::flash('pesan', 'Sukses Update Kelas');
        $crudClass->update([
            "nama_kelas" => $request->kelas,
        ]);
        return redirect("kelas");
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Kelas $crudClass)
    // {
    //     $crudClass->delete();
    //     return redirect("kelas");
    // }

    public function delete(Kelas $id)
    {
        Session::flash('pesan', 'Sukses Hapus Kelas');
        $id->delete();
        return redirect("kelas");
    }
    public function deleteAll()
    {
        Session::flash('pesan', 'Sukses Hapus Semua Kelas');
        Kelas::truncate();
        return redirect("kelas");
    }
}
