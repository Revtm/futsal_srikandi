<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ScheduleCon extends Controller{
  public function index(){
    return view('schedule');
  }

  public function getDataTransaksi(Request $request){
      $trans['trans']  = DB::table('transaksi')->get();
      echo json_encode($trans);
      exit;
  }
}

?>
