<?php

namespace App\Http\Controllers;

use App\RekapPenghasilan;
use App\Exports\RekapEkspor;
use App\Transaksi;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class RekapControll extends Controller
{
    public function index(Request $request){

      

      if(isset($request->ke)){
        // $dataRekap = RekapPenghasilan::where([['tanggal','>=', $request->dari],
        // ['tanggal','<=', $request->ke]])->get();
        $dataRekap = Transaksi::with('jadwal')->where([['tanggal','>=', $request->dari],
        ['tanggal','<=', $request->ke]])->get();
        $tanggal['d'] =  $request->dari;
        $tanggal['k'] = $request->ke;
        return view('prototype_rekap', ['rekap' => $dataRekap, 'tanggal' => $tanggal, 'operator_nama'=>$request->session()->get('nama')]);
      }else{
        $dataRekap = Transaksi::with('jadwal')->where('tanggal', date("Y-m-d"))->get();
        // $dataRekap = RekapPenghasilan::where('tanggal', date("Y-m-d"))->get();
        $tanggal = ['d' => date("Y-m-d") , 'k' => date("Y-m-d")];
        return view('prototype_rekap', ['rekap' => $dataRekap, 'tanggal' => $tanggal, 'operator_nama'=>$request->session()->get('nama')]);
      }

    }

    public function filter(Request $request){
      $dataRekap = Transaksi::with('jadwal','lapangan')->where([['tanggal','>=', $request->dari],
      ['tanggal','<=', $request->ke]])->get();
      $tanggal['d'] =  $request->dari;
      $tanggal['k'] = $request->ke;
      return view('prototype_rekap', ['rekap' => $dataRekap, 'tanggal' => $tanggal, 'operator_nama'=>$request->session()->get('nama')]);
    }

    public function eksporExcel($dari, $ke){
      return Excel::download(new RekapEkspor($dari, $ke), 'rekap_penghasilan.xlsx');
    }
}
