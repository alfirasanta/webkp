<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pelanggan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggans')->insert([
            [
                'nama' => 'aksa',
                'no_telp' => '0862729202',
                'alamat' => 'Jl. Bunga No. 12'
            ],
            [
                'nama' => 'abel',
                'no_telp' => '0817229390',
                'alamat' => 'Jl. Mawar No. 2'
            ],
        ]);
    }
}
