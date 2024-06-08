<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Merk;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $barang = Barang::query();

        if ($keyword) {
            $barang->where('nama', 'like', "%$keyword%")
                   ->orWhere('jenis', 'like', "%$keyword%");
        }

        $barang = $barang->paginate(10);

        return view('barang.index', compact('barang', 'keyword'));
    }

    public function create()
    {
        $merk = Merk::all();
        return view('barang.create', compact('merk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'id_merk' => 'required|exists:merk,id',
            'harga' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
        ]);

        Barang::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'id_merk' => $request->id_merk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
        ]);

        return redirect ('/barang')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    public function edit(Barang $barang)
    {
        $merk = Merk::all();
        return view('barang.edit', compact('barang', 'merk'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'id_merk' => 'required|exists:merk,id',
            'harga' => 'required',
            'stok' => 'required',
            'satuan' => 'required',
        ]);

        $barang->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'id_merk' => $request->id_merk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
        ]);

        return redirect ('/barang')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}

