<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PelangganLayananController extends Controller
{
    public function index()
    {
        $categories = Kategori::all();
        $services = Layanan::all(); // default to show all services
        return view('pelanggan.index', compact('categories', 'services'));
    }

    public function filterByCategory(Request $request)
    {
        $services = Layanan::where('id_kategori', $request->id_kategori)->get();
        return view('pelanggan.partials._services', compact('services'))->render();
    }
}
