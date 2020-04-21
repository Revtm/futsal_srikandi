<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TambahSewaModel;

class TambahSewaControll extends Controller
{
    public function index(Request $request){
      return view('tambahsewa', ['operator_nama'=>$request->session()->get('nama')]);
    }

    public function dataLapangan(){
      $DataLapangan['data'] = TambahSewaModel::all();
      return json_encode($DataLapangan);
    }

    public function tambahSewa(Request $request){
      return view('datasewa', ['req' => $request]);
    }
}
