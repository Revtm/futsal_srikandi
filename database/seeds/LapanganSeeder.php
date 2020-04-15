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
           ]);
        }

    }
}
