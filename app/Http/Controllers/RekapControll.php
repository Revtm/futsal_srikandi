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
      $dataRekap = RekapPenghasilan::paginate(2);
      return view('prototype_rekap', ['rekap' => $dataRekap]);
    }

    public function eksporExcel(){
      return Excel::download(new RekapEkspor, 'rekap_penghasilan.xlsx');
    }
}
