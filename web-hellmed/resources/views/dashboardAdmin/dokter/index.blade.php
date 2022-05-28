@extends('dashboardAdmin.layouts.main')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Data Dokter</h1>
    </div>
    <div class="d-flex p-2">
        <a href="/dashboard/dokter/create" class="btn btn-primary">Tambah Dokter</a>
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
                <th>id Dokter</th>
                <th>Nama Dokter</th>
                <th>Spesialisasi</th>
                <th>Nomor STR</th>
            </tr>
            
            @foreach ($dokter as $dktr)
            <tr>
                <td><a href="/dashboard/dokter/{{ $dktr->idDokter }}/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/dokter/{{ $dktr->idDokter }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td>{{ $dktr->idDokter }}</td>
                <td>{{ $dktr->namaDokter }}</td>
                <td>{{ $dktr->Spesialisasi }}</td>
                <td>{{ $dktr->NomorSTR }}</td>
            </tr>
            @endforeach
        </table>
 
    </div>
@endsection