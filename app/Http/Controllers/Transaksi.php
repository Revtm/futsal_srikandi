<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Transaksi extends Controller{

  public function getDataSewa($s){
    return $s;
  }
  public function tambahsewa(){
    if($_POST['nama']){
      $sewa = $_POST['nama'] . " " . $_POST['id_lap'] . " " . $_POST['pukul'];

      return redirect()->route('transaksii/'. $sewa);
    }
  }
}

 ?>
