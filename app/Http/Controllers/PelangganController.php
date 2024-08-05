<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Layanan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Kategori::all();
        $kategoris = Kategori::all();
        $services = Layanan::all(); // default to show all services
        return view('pelanggan.index', compact('categories', 'services', 'kategoris'));
    }

    public function filterByCategory(Request $request)
    {
        $services = Layanan::where('id_kategori', $request->id_kategori)->get();
        return view('pelanggan.partials._services', compact('services'))->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
