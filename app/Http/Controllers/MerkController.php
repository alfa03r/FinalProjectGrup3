<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Merk;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merk = Merk::all();
        return view ('merk.index', compact('merk')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_merk' => 'required'
        ]);


        Merk::create([
            'nama_merk' => $request['nama_merk'],
        ]);
        return redirect ('/merk')->with('success', 'Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $merk = Merk::find($id);
        return view('merk.show', compact('merk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merk = Merk::find($id);
        return view ('merk.edit', compact('merk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'nama_merk' => 'required'
         ]);


         $merk = Merk::find($id);
         $merk-> nama_merk = $request-> nama_merk;
         $merk->update();
         return redirect('/merk')->with('success', 'Data Berhasil Update');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $merk = Merk::find($id);
        $merk -> delete();
        return redirect('/merk')->with('success', 'Data Berhasil Dihapus');
    }
}