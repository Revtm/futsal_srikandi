<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    public $timestamps = false;
    protected $fillable = ['kode_user', 'nama', 'alamat', 'telepon'];

}
