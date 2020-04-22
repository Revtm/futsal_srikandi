<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Transaksi;

class Jadwal extends Model
{
    protected $table = "jadwal";
    protected $primaryKey = 'kode_jadwal';
    public $timestamps = false;
    public $incrementing = false;

    function transaksi() {
        return $this->hasMany(Transaksi::class,'kode_jadwal');
    }

    function lapangan() {
        return $this->hasMany(Lapangan::class,'kode_jadwal');
    }
}
