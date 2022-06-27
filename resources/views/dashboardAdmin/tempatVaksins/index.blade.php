@extends('dashboardAdmin.layouts.main')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Data Tempat Vaksin</h1>
    </div>
    <div class="d-flex p-2">
        <a href="/dashboard/tempatVaksin/create" class="btn btn-primary">Tambah Tempat Vaksin</a>
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
                <th>Nama Tempat Vaksin</th>
                <th>Alamat Vaksin</th>
                <th>Link Maps</th>
            </tr>
            
            @foreach ($tempatVaksin as $vaksin)
            <tr>
                <td><a href="/dashboard/apotek/{{ $vaksin->idVaksin }}/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/apotek/{{ $vaksin->idVaksin }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td>{{ $vaksin->idVaksin }}</td>
                <td>{{ $vaksin->namaTempatVaksin }}</td>
                <td>{{ $vaksin->alamatVaksin }}</td>
                <td>{{ $vaksin->linkgmaps }}</td>
            </tr>
            @endforeach
        </table>
 
    </div>
@endsection