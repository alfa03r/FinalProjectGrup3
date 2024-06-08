@extends('layouts.master')
@section('title')
    Edit Data Customer
@endsection

@section('content')
<div>
    <h2>Edit Data Customer {{$data_customer->id}}</h2>
    <form action="/data_customer/{{$data_customer->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="phone">Nomor Handphone</label>
            <input type="text" class="form-control" name="phone" value="{{$data_customer->phone}}" id="phone" placeholder="Masukkan Nomor Handphone">
            @error('phone')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat"  value="{{$data_customer->alamat}}"  id="alamat" placeholder="Masukkan Alamat">
            @error('alamat')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kd_pos">Kode Pos</label>
            <input type="text" class="form-control" name="kd_pos"  value="{{$data_customer->kd_pos}}"  id="kd_pos" placeholder="Masukkan kd_pos">
            @error('kd_pos')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input type="text" class="form-control" name="kota"  value="{{$data_customer->kota}}"  id="kota" placeholder="Masukkan kota">
            @error('kota')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="/data_customer" class="btn btn-sm btn-secondary">Back</a>
    </form>
</div>
@endsection