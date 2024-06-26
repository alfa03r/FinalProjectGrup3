<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use App\Models\Customer;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $transaksi = Transaksi::all();
        return view("transaksi.index", ["transaksi" => $transaksi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        $customer = Customer::all();
        return view('transaksi.create', compact('barang','customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_fak' => 'required',
            'id_customer' => 'required|exists:customer,id',
            'id_barang' => 'required|exists:barang,id',
            'jlh_trans' => 'required',
        ]);

        Transaksi::create([
            'no_fak' => $request->no_fak,
            'id_customer' => $request->id_customer,
            'id_barang' => $request->id_barang,
            'jlh_trans' => $request->jlh_trans,
        ]);
        return redirect('/transaksi')->with('success', 'Transaksi berhasil ditambahkan.');
        // dd(@ $request->all() );
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        $barang = Barang::all();
        $customer = Customer::all();
        return view('transaksi.edit', compact('transaksi','barang','customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'no_fak' => 'required',
            'id_customer' => 'required|exists:customer,id',
            'id_barang' => 'required|exists:barang,id',
            'jlh_trans' => 'required',
        ]);

        $transaksi->update([
            'no_fak' => $request->no_fak,
            'id_customer' => $request->id_customer,
            'id_barang' => $request->id_barang,
            'jlh_trans' => $request->jlh_trans,
        ]);
        return redirect('/transaksi')->with('success', 'Transaksi Berhasil DI ubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Barang berhasil dihapus.');
    }
}
