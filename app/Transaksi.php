<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Jadwal;
use App\Lapangan;


class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = ['kode_transaksi','kode_operator','kode_user','kode_lapangan','kode_jadwal','diskon','tanggal'];
    protected $primaryKey = 'kode_transaksi';
    public $timestamps = false;


    function user() {
        return $this->belongsTo(User::class,'kode_user');
    }

    function operator() {
        return $this->belongsTo(Operator::class,'kode_operator');
    }

    function jadwal(){
        return $this->belongsTo(Jadwal::class,'kode_jadwal');
    }

    function lapangan(){
        return $this->belongsTo(Lapangan::class,'kode_lapangan');
    }

}
