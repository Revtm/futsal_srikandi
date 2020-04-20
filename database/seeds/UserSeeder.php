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
                'nama' => 'Budi Budiman',
                'alamat' => 'Jl.Pepaya No.1',
                'telepon' => '081122334455',
            ],

            [
                'nama' => 'Caca Macaca',
                'alamat' => 'Jl.Nangka No.2',
                'telepon' => '082233445566',
            ],

            [
                'nama' => 'Andi Surandi',
                'alamat' => 'Jl.Durian No.3',
                'telepon' => '083344556677',
            ]

        ]);
    }
}
