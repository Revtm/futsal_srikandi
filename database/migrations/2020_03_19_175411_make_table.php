<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('lapangan');
        Schema::dropIfExists('jadwal');
        Schema::dropIfExists('operator');
        Schema::dropIfExists('user');

        Schema::create('operator', function (Blueprint $table) {
            $table->string('kode_operator',5);
            $table->string('nama',50);
            $table->string('password',50);
            $table->primary('kode_operator');
        });

        Schema::create('user', function (Blueprint $table) {
            $table->string('kode_user',5);
            $table->string('nama',50);
            $table->string('alamat',30);
            $table->string('telepon',12);
            $table->primary('kode_user');
        });

        Schema::create('jadwal', function (Blueprint $table) {
            $table->string('kode_jadwal',5);
            $table->string('jam',15);
            $table->integer('harga')->length(20)->unsigned();
            $table->primary('kode_jadwal');
        });

        Schema::create('lapangan', function (Blueprint $table) {
            $table->string('kode_lapangan',5);
            $table->string('nama',50);
            $table->string('lokasi',20);
            $table->string('kode_jadwal',5);
            $table->primary('kode_lapangan');
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->string('kode_transaksi',5);
            $table->string('kode_operator',5);
            $table->string('kode_user',5);
            $table->string('kode_lapangan',5);
            $table->string('kode_jadwal',5);
            $table->integer('diskon')->length(20)->unsigned();
            $table->date('tanggal',30);
            $table->primary('kode_transaksi');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
