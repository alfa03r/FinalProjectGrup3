@extends('layouts.master')

@section('title')
    Customer Data
@endsection

@section('content')
<a href="/data_customer/create" class="btn btn-primary mb-3">Tambah</a>
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Phone</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kode Pos</th>
        <th scope="col">Kota</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($data_customer as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->phone}}</td>
                <td>{{$value->alamat}}</td>
                <td>{{$value->kd_pos}}</td>
                <td>{{$value->kota}}</td>
                <td>
                    
                    <form action="/data_customer/{{$value->id}}" method="POST">
                        <a href="/data_customer/{{$value->id}}" class="btn btn-info">Show</a>
                        <a href="/data_customer/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr colspan="4">
                <td>No data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>
@endsection