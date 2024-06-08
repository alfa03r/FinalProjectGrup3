@extends('layouts.master')

@section('title')
    Detail Merk
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Barang</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            Detail Merk
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $merk->nama_merk }}</h5>
            <a href="/merk" class="btn btn-secondary">Kembali</a>
            
    </div>
@endsection
