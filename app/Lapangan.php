<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaksi;

class Lapangan extends Model
{
    protected $table = "lapangan";
    protected $primaryKey = "kode_lapangan";
    public $timestamps = false;
    public $incrementing = false;

    function transaksi() {
        return $this->hasMany(Transaksi::class,'kode_lapangan');
    }

    function jadwal(){
        return $this->belongsTo(Jadwal::class,'kode_jadwal');
    }
}
