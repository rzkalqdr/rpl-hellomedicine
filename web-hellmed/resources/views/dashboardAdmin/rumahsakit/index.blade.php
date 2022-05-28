@extends('dashboardAdmin.layouts.main')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Data Rumah Sakit</h1>
    </div>
    <div class="d-flex p-2">
        <a href="/dashboard/rumahsakit/create" class="btn btn-primary">Tambah Rumah Sakit</a>
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
                <th>Nama RS</th>
                <th>Alamat RS</th>
            </tr>
            
            @foreach ($rumahsakit as $rs)
            <tr>
                <td><a href="/dashboard/rumahsakit/{{ $rs->idRS }}/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/rumahsakit/{{ $rs->idRS }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td>{{ $rs->idRS }}</td>
                <td>{{ $rs->namaRS }}</td>
                <td>{{ $rs->alamatRS }}</td>
            </tr>
            @endforeach
        </table>
 
    </div>
@endsection