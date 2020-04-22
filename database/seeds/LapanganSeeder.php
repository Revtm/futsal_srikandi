<?php

use Illuminate\Database\Seeder;

class LapanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lapangan')->delete();

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('lapangan')->insert([
               'kode_lapangan' => 'LA-'.$j ,
               'nama' => 'Lapangan Atas',
               'lokasi' => 'Atas',
               'kode_jadwal' => 'A'.$j,
               'lat' => '-5.376350',
               'lng' => '105.255730',
           ]);
        }

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('lapangan')->insert([
               'kode_lapangan' => 'LB-'.$j ,
               'nama' => 'Lapangan Bawah',
               'lokasi' => 'Bawah',
               'kode_jadwal' => 'B'.$j,
               'lat' => '-5.376141',
               'lng' => '105.255585',
           ]);
        }

        for ($i=7; $i < 23; $i++) {
            if($i <10 ){
                $j = sprintf("%02d", $i);
                $end = sprintf("%02d", $i+1);
                $jam = $j.'.00-'.$end.'.00';
            }else{
                $j = $i;
                $end = $i+1;
                $jam = $i.'.00-'.$end.'.00';
            } 

            DB::table('lapangan')->insert([
               'kode_lapangan' => 'LT-'.$j ,
               'nama' => 'Lapangan Tengah',
               'lokasi' => 'Tengah',
               'kode_jadwal' => 'T'.$j,
               'lat' => '-5.376303',
               'lng' => '105.255432',
           ]);
        }

    }
}
