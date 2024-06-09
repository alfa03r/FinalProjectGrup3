@extends('layouts.master')

@section('title')
    Data Transaksi
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Daftar Transaksi</li>
@endsection

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Masukan Penjualan</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table_transaksi">
                    <thead>
                        <tr>
                            <th>Nomor Faktur</th>
                            <th>Nama Pembeli</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Transaksi</th>
                            <th>Waktu Transaksi</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $b)
                        <tr>
                            <td>{{ $b->no_fak }}</td>
                            <td>{{ $b->customer->nama_cus }}</td>
                            <td>{{ $b->barang->nama }}</td>
                            <td>{{ $b->jlh_trans }}</td>
                            <td>{{ $b->created_at }}</td>
                            <td>
                                <a href="{{ route('transaksi.show', $b->id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('transaksi.edit', $b->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('transaksi.destroy', $b->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">
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
