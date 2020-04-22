<?php

namespace App\Http\Controllers;

use App\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function getDataLapangan(Request $request){
        $lapangan['data']  = DB::table('lapangan')->distinct()->get(['latitude','longitude', 'nama']);
        echo json_encode($trans);
        exit;
    }
}
