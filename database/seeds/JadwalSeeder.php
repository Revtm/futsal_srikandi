<?php

use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->delete();

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

            if($i >= 7 && $i <=14){
              DB::table('jadwal')->insert([
                 'kode_jadwal' => 'A'.$j ,
                 'jam' => $jam,
                 'harga' => '70000'
             ]);
           }else if($i >= 15 && $i <=17){
             DB::table('jadwal')->insert([
                'kode_jadwal' => 'A'.$j ,
                'jam' => $jam,
                'harga' => '80000'
            ]);
          }else{
            DB::table('jadwal')->insert([
               'kode_jadwal' => 'A'.$j ,
               'jam' => $jam,
               'harga' => '110000'
           ]);
          }

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

            if($i >= 7 && $i <=14){
              DB::table('jadwal')->insert([
                 'kode_jadwal' => 'B'.$j ,
                 'jam' => $jam,
                 'harga' => '70000'
             ]);
           }else if($i >= 15 && $i <=17){
             DB::table('jadwal')->insert([
                'kode_jadwal' => 'B'.$j ,
                'jam' => $jam,
                'harga' => '80000'
            ]);
          }else{
            DB::table('jadwal')->insert([
               'kode_jadwal' => 'B'.$j ,
               'jam' => $jam,
               'harga' => '110000'
           ]);
          }
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

            if($i >= 7 && $i <=14){
              DB::table('jadwal')->insert([
                 'kode_jadwal' => 'T'.$j ,
                 'jam' => $jam,
                 'harga' => '70000'
             ]);
           }else if($i >= 15 && $i <=17){
             DB::table('jadwal')->insert([
                'kode_jadwal' => 'T'.$j ,
                'jam' => $jam,
                'harga' => '80000'
            ]);
          }else{
            DB::table('jadwal')->insert([
               'kode_jadwal' => 'T'.$j ,
               'jam' => $jam,
               'harga' => '110000'
           ]);
          }
        }
    }
}
