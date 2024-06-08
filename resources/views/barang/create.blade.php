@extends('layouts.master')

@section('title')
    Tambah Barang
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
@endsection


@section('content')
    <div class="container">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukkan Jenis" required>
            </div>
            <div class="form-group">
                <label for="id_merk">Merk</label>
                <select class="form-control" id="id_merk" name="id_merk" required>
                    @foreach($merk as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_merk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok" required>
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Masukkan Satuan" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
