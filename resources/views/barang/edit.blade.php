@extends('layouts.master')

@section('title')
    Ubah Barang
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Barang</li>
@endsection


@section('content')
    <div class="container">

        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $barang->nama }}" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $barang->jenis }}" required>
            </div>
            <div class="form-group">
                <label for="id_merk">Merk</label>
                <select class="form-control" id="id_merk" name="id_merk" required>
                    @foreach($merk as $m)
                        <option value="{{ $m->id }}" {{ $m->id == $barang->id_merk ? 'selected' : '' }}>{{ $m->nama_merk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}" required>
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $barang->satuan }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
