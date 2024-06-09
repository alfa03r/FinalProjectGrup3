@extends('layouts.master')

@section('title')
    Transaksi
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Masukan Transaksi</li>
@endsection


@section('content')
    <div class="container">
        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no_fak">Nomor Faktur</label>
                <input type="text" class="form-control" id="no_fak" name="no_fak" placeholder="Masukkan No Faktur" required>
            </div>
            <div class="form-group">
                <label for="id_customer">Customer</label>
                <select class="form-control" id="id_customer" name="id_customer" required>
                    @foreach($customer as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_cus }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_barang">Barang</label>
                <select class="form-control" id="id_barang" name="id_barang" required>
                    @foreach($barang as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jlh_trans">Jumlah Transaksi</label>
                <input type="number" class="form-control" id="jlh_trans" name="jlh_trans" placeholder="Masukkan Jumlah Transaksi" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
