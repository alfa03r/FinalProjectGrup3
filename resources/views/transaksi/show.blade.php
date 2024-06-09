
@extends('layouts.master')

@section('title')
    Detail Transaksi
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Belanja</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            Detail Transaksi
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>No Faktur</th>
                    <td>{{ $transaksi->no_fak }}</td>
                </tr>
                <tr>
                    <th>Nama Pembeli</th>
                    <td>{{ $transaksi->customer->nama_cus}}</td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td>{{ $transaksi->barang->nama }}</td>
                </tr>
                <tr>
                    <th>Jumlah Transaksi</th>
                    <td>{{ $transaksi->jlh_trans }}</td>
                </tr>
                <tr>
                    <th>Waktu Pembelian</th>
                    <td>{{ $transaksi->created_at }}</td>
                </tr>
            </table>
            <a href="{{ route('transaksi.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
@endsection
