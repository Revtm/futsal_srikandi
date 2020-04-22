<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();
        DB::table('user')->insert([
            [
                'kode_user' => '1',
                'nama' => 'Budi Budiman',
                'telepon' => '081122334455',
            ],

            [
                'kode_user' => '2',
                'nama' => 'Caca Macaca',
                'telepon' => '082233445566',
            ],

            [
                'kode_user' => '3',
                'nama' => 'Andi Surandi',
                'telepon' => '083344556677',
            ]

        ]);
    }
}
