<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $fillable = ['kode_user','nama','kontak'];
    protected $primaryKey = 'kode_user';
    public $timestamps = false;
}

