@extends('layouts.master');

@section('title')
    Tambah Data Customer
@endsection

@section('content')
<h2>Tambah Data</h2>
<form action="/data_customer" method="POST">
    @csrf
    <div class="form-group">
        <label for="phone">Nomor Handphone</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Masukkan Phone">
        @error('phone')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
        @error('alamat')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="kd_pos">Kode Pos</label>
        <input type="text" class="form-control" name="kd_pos" id="kd_pos" placeholder="Masukkan Kode Pos">
        @error('kd_pos')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="kota">Asal Kota</label>
        <input type="text" class="form-control" name="kota" id="kota" placeholder="Masukkan kota">
        @error('kota')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a href="/data_customer" class="btn btn-sm btn-secondary">Back</a>
</form>
@endsection