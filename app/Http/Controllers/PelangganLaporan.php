<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PelangganLaporan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporans = Laporan::all();
        return view('pelanggan.index', compact('laporans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => ':Attribute harus berupa angka.'
        ];
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'no_telp' => 'required|numeric',
            'alamat' => 'required',
            'no_pelanggan' => 'required|numeric',
            'masalah' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $laporan = new Laporan();
        $laporan->id_status = $request->input('id_status', 1);
        $laporan->nama = $request->nama;
        $laporan->no_telp = $request->no_telp;
        $laporan->alamat = $request->alamat;
        $laporan->no_pelanggan = $request->no_pelanggan;
        $laporan->masalah = $request->masalah;
        $laporan->save();

        return redirect()->route('pelanggan.index')->with('success', 'Terima kasih atas laporan Anda. Kami akan menghubungi Anda via WhatsApp.');
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
