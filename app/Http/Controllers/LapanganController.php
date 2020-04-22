<?php

namespace App\Http\Controllers;

use App\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index()
    {
        $lapangan = Lapangan::distinct()->get(['latitude','longitude', 'nama'])->get()
        return view('profile',compact('lapangan'));
    }
   
}
