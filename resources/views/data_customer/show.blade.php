@extends('layouts.master')

@section('title')
    Detail Data Customer
@endsection

@section('content')
<h4>{{$data_customer->phone}}</h4>
<p>{{$data_customer->alamat}}</p>
<p>{{$data_customer->kd_pos}}</p>
<p>{{$data_customer->kota}}</p>

<a href="/data_customer" class="btn btn-sm btn-secondary">Back</a>
@endsection