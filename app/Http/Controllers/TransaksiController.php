<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        $layanans = Layanan::all();
        return view('Transaksi.index', compact('transaksis', 'layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $layanan = Layanan::all();
        return view('Transaksi.tambah', compact('layanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'waktu_transaksi' => $request->waktu_transaksi,
            'nama_pelanggan' => $request->nama_pelanggan,
            'id_layanan' => $request->id_layanan,
            'berat' => $request->berat,
            'keterangan' => $request->keterangan,
            'pembayaran' => $request->pembayaran,
        ]);
        return redirect('/transaksi')->with('Berhasil');
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
        $transaksi = Transaksi::find($id);
        $layanans = Layanan::all();
        return view('transaksi.edit', compact('transaksi', 'layanans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Transaksi::where('id_transaksi', $id)
            ->update([
                'waktu_transaksi' => $request->waktu_transaksi,
                'nama_pelanggan' => $request->nama_pelanggan,
                'id_layanan' => $request->id_layanan,
                'berat' => $request->berat,
                'keterangan' => $request->keterangan,
                'pembayaran' => $request->pembayaran
            ]);
        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Transaksi::where('id_transaksi', $id)->delete();
        return redirect('/transaksi');
    }
    public function print($id)
    {
        $transaksi = Transaksi::with('layanan')->where('id_transaksi', $id)->first();
        return view('Transaksi.struk', compact('transaksi'));
    }

    // public function bayar (string $id){
    //     $transaksi = Transaksi::findOrFail($id);
    //     $transaksi -> pembayaran = 'Lunas';
    //     $transaksi -> save();

    //     return redirect ('Transaksi.index',)
    // }
}
