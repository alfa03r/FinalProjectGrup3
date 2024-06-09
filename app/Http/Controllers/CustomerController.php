<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DataCustomer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $customer = Customer::query();

        if ($keyword) {
            $customer->where('nama_cus', 'like', "%$keyword%")
                   ->orWhere('email', 'like', "%$keyword%");
        }

        $customer = $customer->paginate(10);

        return view('customer.index', compact('customer', 'keyword'));
    }

    public function create()
    {
        $data_customer = DataCustomer::all();
        return view('customer.create', compact('data_customer'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_cus' => 'required',
            'email' => 'required',
            'id_data_customer' => 'required|exists:data_customer,id',
        ]);

        Customer::create([
            'nama_cus' => $request->nama_cus,
            'email' => $request->email,
            'id_data_customer' => $request->id_data_customer,
        ]);

        return redirect ('/customer')->with('success', 'Customer berhasil ditambahkan.');
    }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $data_customer = DataCustomer::all();
        return view('customer.edit', compact('customer', 'data_customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'nama_cus' => 'required',
            'email' => 'required',
            'id_data_customer' => 'required|exists:data_customer,id',
        ]);

        $customer->update([
            'nama_cus' => $request->nama_cus,
            'email' => $request->email,
            'id_data_customer' => $request->id_data_customer,
        ]);

        return redirect ('/customer')->with('success', 'Customer berhasil diperbarui.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index')->with('success', 'Customer berhasil dihapus.');
    }
}