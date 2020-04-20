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
        DB::table('operator')->delete();
        DB::table('operator')->insert([
            [
                'nama' => 'Rivaldo',
                'password' => bcrypt('admin'),
            ],

            [
                'nama' => 'Iqbal',
                'password' => bcrypt('admin'),
            ],

            [
                'nama' => 'Jefri',
                'password' => bcrypt('admin'),
            ]

        ]);
    }
}
