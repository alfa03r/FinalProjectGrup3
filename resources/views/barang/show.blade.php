<!-- resources/views/barang/show.blade.php -->
@extends('layouts.master')

@section('title')
    Detail Barang
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Barang</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            Detail Barang
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $barang->nama }}</td>
                </tr>
                <tr>
                    <th>Jenis</th>
                    <td>{{ $barang->jenis }}</td>
                </tr>
                <tr>
                    <th>Merk</th>
                    <td>{{ $barang->merk->nama_merk }}</td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>{{ $barang->harga }}</td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>{{ $barang->stok }}</td>
                </tr>
                <tr>
                    <th>Satuan</th>
                    <td>{{ $barang->satuan }}</td>
                </tr>
            </table>
            <a href="{{ route('barang.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
@endsection
