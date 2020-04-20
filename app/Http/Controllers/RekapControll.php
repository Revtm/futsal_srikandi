<?php

namespace App\Http\Controllers;

use App\RekapPenghasilan;
use App\Exports\RekapEkspor;
use Maatwebsite\Excel\Facades\Excel;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class RekapControll extends Controller
{
    public function index(){
      $dataRekap = RekapPenghasilan::where('tanggal', date("Y-m-d"))->get();
      $tanggal = ['d' => date("Y-m-d") , 'k' => date("Y-m-d")];
      return view('prototype_rekap', ['rekap' => $dataRekap, 'tanggal' => $tanggal]);
    }

    public function filter(Request $request){
      $dataRekap = RekapPenghasilan::where([['tanggal','>=', $request->dari],
      ['tanggal','<=', $request->ke]])->get();
      $tanggal['d'] =  $request->dari;
      $tanggal['k'] = $request->ke;
      return view('prototype_rekap', ['rekap' => $dataRekap, 'tanggal' => $tanggal]);
    }

    public function eksporExcel($dari, $ke){
      return Excel::download(new RekapEkspor($dari, $ke), 'rekap_penghasilan.xlsx');
    }
}
