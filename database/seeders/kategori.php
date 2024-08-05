<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kategoris')->insert([
            [
                'kode' => 'IB',
                'nama_kategori' => 'Internet Bisnis',
                'deskripsi' => 'Solusi jaringan koneksi internet yang menghubungkan pengguna dengan dunia digital secara cepat, stabil dan efisien',
                'kelebihan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ], [
                'kode' => 'OP',
                'nama_kategori' => 'Operasional',
                'deskripsi' => 'Solusi kebutuhan digital untuk manajemen bisnis yang inovatif dan terintegrasi, serta meningkatkan efisiensi dan produktivitas',
                'kelebihan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ], [
                'kode' => 'SDM',
                'nama_kategori' => 'SDM',
                'deskripsi' => 'Produk yang dapat memfasilitasi pengembangan keterampilan, dan meningkatkan produktivitas',
                'kelebihan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ], [
                'kode' => 'PSR',
                'nama_kategori' => 'Pemasaran',
                'deskripsi' => 'Produk yang dapat merangsang inovasi, dan mengoptimalkan kinerja bisnis dalam era teknologi yang terus berkembang',
                'kelebihan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ]
        ]);
    }
}
