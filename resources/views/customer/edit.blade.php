@extends('layouts.master')

@section('title')
    Edit Customer
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Customer</li>
@endsection


@section('content')
    <div class="container">

        <form action="{{ route('customer.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_cus">Nama</label>
                <input type="text" class="form-control" id="nama_cus" name="nama_cus" value="{{ $customer->nama_cus }}" required>
            </div>
            <div class="form-group">
                <label for="jenis">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $customer->email }}" required>
            </div>
            <div class="form-group">
                <label for="id_data_customer">Data Customer(By NO HP)</label>
                <select class="form-control" id="id_data_customer" name="id_data_customer" required>
                    @foreach($data_customer as $dc)
                        <option value="{{ $dc->id }}" {{ $dc->id == $customer->phone? 'selected' : '' }}>{{ $dc->phone}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
