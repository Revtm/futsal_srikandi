<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\User;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $transaksi = Transaksi::where('tanggal', '2020-04-07')
               ->orderBy('tanggal', 'desc')
               ->get();
        
        return view('daftarpenyewa',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userfdb = User::where('nama', '=', $request->nama)
        >where('telepon', '=', $request->kontak)
        ->get();

        if($userfdb){

        }else{
            $user = new User;
            $user->kode_user="1";
            $user->nama = $request->nama;
            $user->telepon = $request->kontak;

            $userfdb = User::where('nama', '=', $request->nama)
            >where('telepon', '=', $request->kontak)
            ->get();

        }

        $transaksi = new Transaksi;
            $transaksi->kode_operator = '00001';
            $transaksi->kode_user = $userfdb=>;
            $transaksi->kode_lapangan = $request->kode_lapangan;
            $transaksi->kode_jadwal = $request->kode_jadwal;
            $transaksi->diskon = '0';
            $transaksi->tanggal = '2020-04-07';
            $transaksi->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
