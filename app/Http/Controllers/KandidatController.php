<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKandidatRequest;
use App\Http\Requests\UpdateKandidatRequest;
use App\Models\Kandidat;
use Illuminate\Support\Facades\Session;

class KandidatController extends Controller
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
    public function store(StoreKandidatRequest $request)
    {
        $gambar = $request->file('gambar');
        $nama_gambar = date("dmyhis") . $gambar->getClientOriginalName();
        $gambar->move(public_path('foto/'), $nama_gambar);

        Kandidat::create([
            'nisn' => $request->nisn,
            'no' => $request->no,
            'nama' => $request->nama,
            'nama_panggilan' => $request->nama_panggilan,
            'visi_misi' => $request->visi_misi,
            'foto' => $nama_gambar,
        ]);
        Session::flash('pesan', 'Sukses Menambah Kandidat');
        return redirect("kandidatKetuaOsis");
    }

    /**
     * Display the specified resource.
     */
    public function show(Kandidat $crudKandidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kandidat $crudKandidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKandidatRequest $request, Kandidat $crudKandidat)
    {
        $id = $crudKandidat->id_kandidat;
        $visimisi = "visi_misi" . $id;
        $crudKandidat->update([
            'nisn' => $request->nisn,
            'no' => $request->no,
            'nama' => $request->nama,
            'nama_panggilan' => $request->nama_panggilan,
            'visi_misi' => $request->$visimisi,
        ]);
        if ($request->hasFile('gambar')) {
            $cari_foto = public_path('foto/') . $crudKandidat->foto;
            if (file_exists($cari_foto)) {
                @unlink($cari_foto);
            }

            $file_gambar = $request->file('gambar');
            $nama_gambar = date("dmyhis") . $file_gambar->getClientOriginalName();
            $file_gambar->move(public_path('foto'), $nama_gambar);
            $crudKandidat->update([
                'foto' => $nama_gambar,
            ]);
        }

        Session::flash('pesan', 'Sukses Edit Kandidat');
        return redirect('kandidatKetuaOsis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kandidat $crudKandidat)
    {
        //
    }

    public function delete(Kandidat $id)
    {
        $foto_lama = public_path('foto/') . $id->foto;
        if (file_exists($foto_lama)) {
            @unlink($foto_lama);
        }
        $id->delete();
        Session::flash('pesan', 'Sukses Hapus Kandidat');
        return redirect("kandidatKetuaOsis");
    }
}
