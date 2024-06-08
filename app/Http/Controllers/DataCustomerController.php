<?php

namespace App\Http\Controllers;

use App\Models\DataCustomer;
use Illuminate\Http\Request;

class DataCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_customer = DataCustomer::all();
        return view("data_customer.index", ["data_customer" => $data_customer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("data_customer.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|min:10',
            'alamat' => 'required',
            'kd_pos' => 'required',
            'kota' => 'required',
        ]);

        DataCustomer::create([
    		'phone' => $request->phone,
    		'alamat' => $request->alamat,
            'kd_pos' => $request->kd_pos,
            'kota' => $request->kota
    	]);

        return redirect('/data_customer');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataCustomer $dataCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataCustomer $dataCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataCustomer $dataCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_customer = DataCustomer::find($id);
        $data_customer->delete();
        return redirect('/data_customer');
    }
}
