<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminLayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::with('category')->get();
        // dd($layanans);
        return view('layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategoris = Kategori::all();
        return view('layanan.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messages = [
            'required' => ':Attribute harus diisi.'
        ];
        $validator = Validator::make($request->all(), [
            'nama_layanan' => 'required',
            'detail' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $layanan = new Layanan;
        $layanan->id_kategori = $request->nama_kategori;
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->detail = $request->detail;
        $layanan->save();

        return redirect()->route('adminlayanan.index');
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
        $kategoris = Kategori::all();
        $layanans = Layanan::find($id);
        return view('layanan.edit', compact('layanans', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $messages = [
            'required' => ':Attribute harus diisi.'
        ];
        $validator = Validator::make($request->all(), [
            'nama_layanan' => 'required',
            'detail' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $layanan = Layanan::find($id);
        $layanan->id_kategori = $request->nama_kategori;
        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->detail = $request->detail;
        $layanan->save();

        return redirect()->route('adminlayanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Layanan::find($id)->delete();
        return redirect()->route('adminlayanan.index');
    }
}
