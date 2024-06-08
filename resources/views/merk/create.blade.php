@extends('layouts.master')

@section('title')
    Tambah Merk    
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Barang</li>
@endsection

@section('content')
        <form action="/merk" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_merk">Merk</label>
                <input type="text" class="form-control" name="nama_merk" id="nama_merk" placeholder="Masukkan Merk">
                @error('nama_merk')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="/merk" class="btn btn-secondary">Kembali</a>
        </form>
@endsection