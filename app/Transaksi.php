<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    public $timestamps = false;
    protected $fillable = ['kode_transaksi','kode_operator','kode_user','kode_lapangan','kode_jadwal','diskon','tanggal'];

}
