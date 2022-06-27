@extends('dashboardAdmin.layouts.main')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Data Obat</h1>
    </div>
    <div class="d-flex p-2">
        <a href="/dashboard/obat/create" class="btn btn-primary">Tambah Obat</a>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th></th>
                <th></th>
                <th>id</th>
                <th>Nama Obat</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Keterangan</th>
            </tr>
            
            @foreach ($barang as $brng)
            <tr>
                <td><a href="/dashboard/obat/{{ $brng->id }}/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/obat/{{ $brng->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td>{{ $brng->id }}</td>
                <td>{{ $brng->nama_barang }}</td>
                <td>{{ $brng->stok }}</td>
                <td>{{ $brng->harga }}</td>
                <td>{{ $brng->keterangan }}</td>
            </tr>
            @endforeach
        </table>
 
    </div>
@endsection