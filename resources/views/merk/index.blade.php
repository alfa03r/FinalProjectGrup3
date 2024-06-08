@extends('layouts.master')

@section('title')
    Data Barang 
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Barang</li>
@endsection

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('merk.create') }}" class="btn btn-primary">Tambah Merk</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table_barang">
                    <thead>
                        <tr>
                            <th>Nama Merk</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($merk as $items)
                        <tr>
                            <td>{{ $items->nama_merk }}</td>
                            <td>
                                <a href="{{ route('merk.show', $items->id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('merk.edit', $items->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('merk.destroy', $items->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">
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
            $('#table_barang').DataTable();
        });
    </script>
@endpush
