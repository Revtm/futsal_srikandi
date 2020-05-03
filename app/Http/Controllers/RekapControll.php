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


      date_default_timezone_set("Asia/Jakarta");
      if(isset($request->ke)){
        // $dataRekap = RekapPenghasilan::where([['tanggal','>=', $request->dari],
        // ['tanggal','<=', $request->ke]])->get();
        $dataRekap = Transaksi::with('jadwal','user')->where([['tanggal','>=', $request->dari],
        ['tanggal','<=', $request->ke]])->orderBy('tanggal', 'ASC')->get();
        $tanggal['d'] =  $request->dari;
        $tanggal['k'] = $request->ke;
        return view('prototype_rekap', ['rekap' => $dataRekap, 'tanggal' => $tanggal, 'operator_nama'=>$request->session()->get('nama')]);
      }else{
        $dataRekap = Transaksi::with('jadwal','user')->where('tanggal', date("Y-m-d"))->orderBy('tanggal', 'ASC')->get();
        // $dataRekap = RekapPenghasilan::where('tanggal', date("Y-m-d"))->get();
        $tanggal = ['d' => date("Y-m-d") , 'k' => date("Y-m-d")];
        return view('prototype_rekap', ['rekap' => $dataRekap, 'tanggal' => $tanggal, 'operator_nama'=>$request->session()->get('nama')]);
      }

    }

    public function filter(Request $request){
      $dataRekap = Transaksi::with('jadwal','lapangan','user')->where([['tanggal','>=', $request->dari],
      ['tanggal','<=', $request->ke]])->orderBy('tanggal', 'ASC')->get();
      $tanggal['d'] =  $request->dari;
      $tanggal['k'] = $request->ke;
      return view('prototype_rekap', ['rekap' => $dataRekap, 'tanggal' => $tanggal, 'operator_nama'=>$request->session()->get('nama')]);
    }

    public function ubahBulan($bulan){
      if($bulan == "Januari"){
        return '01';
      }else if($bulan == "Februari"){
        return '02';
      }else if($bulan == "Maret"){
        return '03';
      }else if($bulan == "April"){
        return '04';
      }else if($bulan == "Mei"){
        return '05';
      }else if($bulan == "Juni"){
        return '06';
      }else if($bulan == "Juli"){
        return '07';
      }else if($bulan == "Agustus"){
        return '08';
      }else if($bulan == "September"){
        return '09';
      }else if($bulan == "Oktober"){
        return '10';
      }else if($bulan == "November"){
        return '11';
      }else {
        return '12';
      }
    }

    public function getDataRekapBulanan($dari, $ke){
      //$namabulan="April";//$request->bulan;
      //$bulan = $this->ubahBulan($namabulan);
      //$tahun="2020";//$request->tahun;
      //$dataRekap['transaksi'] = Transaksi::with('jadwal','lapangan')->where('tanggal','like', $tahun.'-'.$bulan.'-'.'%')->orderBy('tanggal', 'ASC')->get();
      $dataRekap['transaksi'] = Transaksi::with('jadwal','lapangan')->where([['tanggal','>=', $dari],
      ['tanggal','<=', $ke]])->orderBy('tanggal', 'ASC')->get();
      return json_encode($dataRekap);
    }

    public function eksporExcel($dari, $ke){
      return Excel::download(new RekapEkspor($dari, $ke), 'Rekap Penghasilan '.$dari.' to '.$ke.'.xlsx');
    }
}
