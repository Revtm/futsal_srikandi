<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

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
