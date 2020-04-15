<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = ['kode_transaksi','kode_operator','kode_user','kode_lapangan','kode_jadwal','diskon','tanggal'];
    protected $primaryKey = 'kode_transaksi';
    public $timestamps = false;


    function user() {
        return $this->belongsTo('App\User');
    }

}
