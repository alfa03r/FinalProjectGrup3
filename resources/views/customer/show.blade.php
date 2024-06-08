<!-- resources/views/barang/show.blade.php -->
@extends('layouts.master')

@section('title')
    Detail Customer
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Customer</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            Detail Customer
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $customer->nama_cus }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $customer->email}}</td>
                </tr>
            </table>
            <a href="{{ route('customer.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
@endsection
