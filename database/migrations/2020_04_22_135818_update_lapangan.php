<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLapangan extends Migration
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
            $table->increments('kode_operator');
            $table->string('nama',50);
            $table->string('password');
        });

        Schema::create('user', function (Blueprint $table) {
            $table->increments('kode_user');
            $table->string('nama',50);
            $table->string('telepon',12);
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
            $table->decimal('lat', 10, 6);
            $table->decimal('lng', 10, 6);
            $table->string('kode_jadwal',5);
            $table->primary('kode_lapangan');
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('kode_transaksi');
            $table->integer('kode_operator')->unsigned();
            $table->integer('kode_user')->unsigned();
            $table->string('kode_lapangan',5);
            $table->string('kode_jadwal',5);
            $table->integer('diskon')->length(20)->unsigned();
            $table->date('tanggal',30);
        });

        Schema::table('lapangan', function (Blueprint $table) {
            $table->foreign('kode_jadwal')->references('kode_jadwal')->on('jadwal');
        });

        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('kode_operator')->references('kode_operator')->on('operator');
            $table->foreign('kode_lapangan')->references('kode_lapangan')->on('lapangan');
            $table->foreign('kode_user')->references('kode_user')->on('user');
            $table->foreign('kode_jadwal')->references('kode_jadwal')->on('jadwal');
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
