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

        $transaksi = Transaksi::where('tanggal', '2020-04-09')
               ->orderBy('tanggal', 'desc')
               ->get();

        return view('daftarpenyewa',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $userfdb = User::where([['nama', '=', $request->nama],
        ['telepon', '=', $request->kontak]])->first();

        if($userfdb){

        }else{
            User::create(
             ['kode_user' => "11", 'nama' => $request->nama,
             'telepon' => $request->kontak, 'alamat' => "Jl. Planet Bekasi"]
            );

             $userfdb = User::where([['nama', '=', $request->nama],
             ['telepon', '=', $request->kontak]])->first();

        }

        for($i = 0 ; $i < count($request->kode_lapangan) ; $i++){
          Transaksi::create(
            ['kode_transaksi' => "18", 'kode_operator'=>"00001", 'kode_user' => $userfdb->kode_user,
            'kode_lapangan'=> $request->kode_lapangan[$i],'kode_jadwal'=> $request->kode_jadwal[$i], 'diskon'=>5000,
            'tanggal'=>'2020-04-09']
          );
        }

        return redirect('/tambahsewa');

}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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
        return view('edit',compact('transaksi'));
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

        $updates = Transaksi::find($transaksi->kode_transaksi);
        $updates->diskon = $request->diskon;
        $updates->kode_jadwal = $request->jadwal;
        $updates->tanggal = $request->tanggal;
        $updates->save();

        $updates = User::find($transaksi->kode_user);
        $updates->nama = $request->nama;
        $updates->telepon = $request->kontak;
        $updates->save();

        return redirect('/daftarpenyewa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        Transaksi::destroy($transaksi->kode_transaksi);
        return redirect('/daftarpenyewa');
    }
}
