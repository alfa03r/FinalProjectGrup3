@extends('layouts.master')

@section('title')
    Ubah Merk
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Barang</li>
@endsection

@section('content')   
<div>
        <form action="/merk/{{$merk->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_merk">Nama</label>
                <input type="text" class="form-control" name="nama_merk" value="{{$merk->nama_merk}}" id="nama_merk" placeholder="Masukkan Merk">
                @error('nama_merk')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
