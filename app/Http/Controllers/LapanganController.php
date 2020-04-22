<?php

namespace App\Http\Controllers;

use App\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index()
    {   
        $dump = Lapangan::where([['lat', '=', 'NULL']])->get();
        $lapangan = Lapangan::distinct()->get(['lat','lng','nama']);
        return view('profile',['lapangan'=>$lapangan,'dump'=>$dump]);
    }
}
