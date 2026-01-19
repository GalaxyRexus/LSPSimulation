<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Transaksi;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlayanan = Layanan::count();
        $jumtrans = Transaksi::count();

        $sedproses = Transaksi::where('keterangan', 'Proses')->count();
        $belbay = Transaksi::where('pembayaran','Belum Bayar')->count();
        $transbaru = Transaksi::all();
        return view('Dashboard.index', compact ('jumlayanan','jumtrans','sedproses','belbay','transbaru'));
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
