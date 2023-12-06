<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdentitassekolahRequest;
use App\Http\Requests\UpdateIdentitassekolahRequest;
use App\Models\Identitassekolah;
use Illuminate\Support\Facades\Session;

class IdentitassekolahController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIdentitassekolahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Identitassekolah $crudIdentitasSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Identitassekolah $crudIdentitasSekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIdentitassekolahRequest $request, Identitassekolah $crudIdentitasSekolah)
    {
        Session::flash('pesan', 'Sukses Update Identitas Sekolah');
        $crudIdentitasSekolah->update([
            "npsn" => $request->npsn,
            "nama_sekolah" => $request->nama_sekolah,
            "alamat_jalan" => $request->alamat_jalan,
            "desa" => $request->desa,
            "kecamatan" => $request->kecamatan,
            "kabupaten" => $request->kabupaten,
            "kepala_sekolah" => $request->kepala_sekolah,
            "nip" => $request->nip,
        ]);
        return redirect('identitasSekolah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Identitassekolah $crudIdentitasSekolah)
    {
        //
    }
}
