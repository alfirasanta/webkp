<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class layanan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanans')->insert([
            [
                'id_kategori' => '1',
                'nama_layanan' => 'HSI B2B Bisnis Unlimited',
                'detail' => 'Koneksi internet cepat dan stabil untuk bisnis dengan rasio
                kecepatan 1:1 dan tanpa batas FUP'
            ], [
                'id_kategori' => '1',
                'nama_layanan' => 'Netmonk Monitoring Jaringan',
                'detail' => 'Pantau status & kondisi jaringan HSI B2B melalui dashboard monitoring
                secara real-time dan proaktif'
            ], [
                'id_kategori' => '1',
                'nama_layanan' => 'Antares IoT Solutions',
                'detail' => 'Rangkaian solusi Internet of Things unggulan untuk transformasi efisiensi dan
                produktivitas bisnis'
            ], [
                'id_kategori' => '2',
                'nama_layanan' => 'Antares Eazy Rekaman CCTV',
                'detail' => 'Layanan penyimpanan rekaman CCTV yang aman dan mudah diakses dengan teknologi
                Cloud Telkom'
            ], [
                'id_kategori' => '2',
                'nama_layanan' => 'Pijar Manajemen Sekolah',
                'detail' => 'Platform digital untuk mempermudah manajemen sekolah seperti pengelolaan
                absensi, ujian, dan buku digital'
            ], [
                'id_kategori' => '3',
                'nama_layanan' => 'Kursus Bisnis Pijar Mahir',
                'detail' => 'Pelatihan bisnis online dan offline mulai dari bebas biaya hingga
                pelatihan premium berbayar'
            ], [
                'id_kategori' => '4',
                'nama_layanan' => 'OCA Message Blast',
                'detail' => 'Kirim pesan ke banyak pelanggan secara bersamaan di berbagai channel seperti
                WhatsApp, SMS, Email dan IVR'
            ], [
                'id_kategori' => '4',
                'nama_layanan' => 'BigBox Analitik E-Commerce',
                'detail' => 'Analisis penjualan, pendapatan, tren produk, dan persaingan di berbagai e-marketplace
                dari satu platform'
            ], [
                'id_kategori' => '4',
                'nama_layanan' => 'BigBox Analitik Media Sosial',
                'detail' => 'Platform digital untuk analisis tingkatan kinerja media sosial dan memaksimalkan potensi bisnis Anda'
            ], [
                'id_kategori' => '4',
                'nama_layanan' => 'OCA WhatsApp Business API',
                'detail' => 'Peningkatan kredibilitas kanal komunikasi melalui WhatsApp Business dengan centang hijau resmi'
            ], [
                'id_kategori' => '4',
                'nama_layanan' => 'OCA Chatbot Builder',
                'detail' => 'Layanan chatbot tanpa koding yang mudah dibuat untuk berinteraksi 24/7 dengan pelanggan Anda'
            ], [
                'id_kategori' => '4',
                'nama_layanan' => 'OCA Customer Engagement Platform',
                'detail' => 'Dashboard untuk kelola komunikasi bersama pelanggan lewat SMS, Email, WhatsApp dan media sosial lainnya'
            ], [
                'id_kategori' => '4',
                'nama_layanan' => 'OCA Customer Relationship Management',
                'detail' => 'Peningkatan kredibilitas kanal komunikasi melalui WhatsApp Business dengan centang hijau resmi'
            ],
        ]);
    }
}
