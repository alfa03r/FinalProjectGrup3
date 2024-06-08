@extends('layouts.master')

@section('title')
    Tambah Customer
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Tambah Customer</li>
@endsection


@section('content')
    <div class="container">
        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_cus">Nama</label>
                <input type="text" class="form-control" id="nama_cus" name="nama_cus" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group">
                <label for="id_data_customer">Data Customer</label>
                <select class="form-control" id="id_data_customer" name="id_data_customer" required>
                    @foreach($data_customer as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_cus}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
