<?php

use Illuminate\Database\Seeder;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operator')->insert([
        	'nama' => 'Rivaldo',
        	'password' => '$2b$10$80jPIoBgnKudNXP1h256duagLn.BoTz/gr/5WWlUhP7Y.fgB6G3Ia'
        ]);

        DB::table('operator')->insert([
        	'nama' => 'Iqbal',
        	'password' => '$2b$10$80jPIoBgnKudNXP1h256duagLn.BoTz/gr/5WWlUhP7Y.fgB6G3Ia'
        ]);
    }
}
