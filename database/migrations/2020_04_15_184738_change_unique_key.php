<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUniqueKey extends Migration
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
            $table->string('password',50);
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
