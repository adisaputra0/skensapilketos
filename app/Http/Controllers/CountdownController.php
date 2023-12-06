<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountdownRequest;
use App\Http\Requests\UpdateCountdownRequest;
use App\Models\Countdown;
use Illuminate\Support\Facades\Session;

class CountdownController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("user.countDown")->with([
            "countdown" => Countdown::find(1),
        ]);
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
    public function store(StoreCountdownRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Countdown $crudCountdown)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Countdown $crudCountdown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountdownRequest $request, Countdown $crudCountdown)
    {
        Session::flash('pesan', 'Sukses Update CountDown');
        $crudCountdown->update([
            'tanggal' => $request->tanggal,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
        ]);
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Countdown $crudCountdown)
    {
        //
    }
}
