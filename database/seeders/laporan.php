<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class laporan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporans')->insert([
            [
                'id_status' => '1',
                'nama' => 'Abel',
                'no_telp' => '0827372920',
                'alamat' => 'jl. Semeru no 19',
                'no_pelanggan' => '83729020',
                'masalah' => 'internet lemot',
            ],
            [
                'id_status' => '2',
                'nama' => 'Aksa',
                'no_telp' => '0827372220',
                'alamat' => 'jl. Melati no. 20',
                'no_pelanggan' => '82802272',
                'masalah' => 'internet lemot',
            ],
        ]);
    }
}
