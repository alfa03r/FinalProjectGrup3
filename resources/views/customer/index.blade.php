@extends('layouts.master')

@section('title')
    Customer 
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Customer</li>
@endsection

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('customer.create') }}" class="btn btn-primary">Tambah Customer</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table_barang">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customer as $c)
                        <tr>
                            <td>{{ $c->nama_cus }}</td>
                            <td>{{ $c->email}}</td>
                            <td>
                                <a href="{{ route('customer.show', $c->id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('customer.edit', $c->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('customer.destroy', $c->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin Customer ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table_customer').DataTable();
        });
    </script>
@endpush
