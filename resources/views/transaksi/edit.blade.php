@extends('layouts.master')

@section('title')
    Ubah Transaksi
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Masukan Transaksi</li>
@endsection


@section('content')
    <div class="container">

        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="no_fak">Nomor Faktur</label>
                <input type="text" class="form-control" id="no_fak" name="no_fak" value="{{ $transaksi->no_fak }}" required>
            </div>
            <div class="form-group">
                <label for="id_customer">Nama Pembeli</label>
                <select class="form-control" id="id_customer" name="id_customer" required>
                    @foreach($customer as $m)
                        <option value="{{ $m->id }}" {{ $m->id == $transaksi->id_customer ? 'selected' : '' }}>{{ $m->nama_cus }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_barang">Nama Barang</label>
                <select class="form-control" id="id_barang" name="id_barang" required>
                    @foreach($barang as $m)
                        <option value="{{ $m->id }}" {{ $m->id == $transaksi->id_barang ? 'selected' : '' }}>{{ $m->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jlh_trans">Jumlah Transaksi</label>
                <input type="number" class="form-control" id="jlh_trans" name="jlh_trans" value="{{ $transaksi->jlh_trans }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
