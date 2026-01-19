<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Layanans = Layanan::all();
        return view('Layanan.index', compact('Layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Layanan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'harga_per_kg' => $request->harga_per_kg,
        ]);
        return redirect('/layanan')->with('success', 'Data berhasil ditambahkan!');
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
        $layanan = Layanan::where('id_layanan', operator: $id)->first();
        return view('Layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Layanan::where('id_layanan', $id)
            ->update([
                'nama_layanan' => $request -> nama_layanan,
                'harga_per_kg' => $request -> harga_per_kg,

                ]);
            return redirect('/layanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Layanan::where('id_layanan', $id)->delete();
        return redirect('/layanan', )->with('Success', 'Data Berhasil Dihapus');
    }
}
