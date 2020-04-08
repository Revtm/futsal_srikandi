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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $userfdb = User::where('nama', $request->nama)
        //         ->where('telepon', $request->kontak)
        //        ->get();

        //     if($userfdb){
               
        //     }else{
        //         dd("salah");
        //     }
        //     $json = $request;
        //     $reqarray = json_decode($json);
        //     return $reqarray;

        //     foreach ($reqarray as $rqs) {

        //         $transaksi = new Transaksi;
        //         $transaksi->kode_operator = '00001';
        //         $transaksi->kode_user = $userfdb[0]->kode_user;
        //         $transaksi->kode_lapangan = $rqs->kode_lapangan;
        //         $transaksi->kode_jadwal = $rqs->kode_jadwal;
        //         $transaksi->diskon = '123123';
        //         $transaksi->tanggal = '2020-04-07';
        //         $transaksi->save();
        //         }

                // return "berhasil";

                $transaksi = new Transaksi;
                $transaksi->kode_operator = '00001';
                $transaksi->kode_user = '00001';
                $transaksi->kode_lapangan = 'LA-08';
                $transaksi->kode_jadwal = 'C20';
                $transaksi->diskon = '0';
                $transaksi->tanggal = '2020-04-07';

                Transaksi::create([
                    kode_opera
                ])
            
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
