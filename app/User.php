<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $fillable = ['kode_user', 'nama', 'alamat', 'telepon'];
    protected $primaryKey = 'kode_user';
    public $timestamps = false;

    function transaksi() {
        return $this->hasMany('App\transaksi');
    }
}

