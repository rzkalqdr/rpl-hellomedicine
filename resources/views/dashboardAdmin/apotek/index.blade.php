@extends('dashboardAdmin.layouts.main')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Data Rumah Sakit</h1>
    </div>
    <div class="d-flex p-2">
        <a href="/dashboard/apotek/create" class="btn btn-primary">Tambah Rumah Sakit</a>
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
                <th>Nama Apotek</th>
                <th>Alamat Apotek</th>
                <th>Link Maps</th>
            </tr>
            
            @foreach ($apotek as $aptk)
            <tr>
                <td><a href="/dashboard/apotek/{{ $aptk->idApotek }}/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/apotek/{{ $aptk->idApotek }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td>{{ $aptk->idApotek }}</td>
                <td>{{ $aptk->namaApotek }}</td>
                <td>{{ $aptk->alamatApotek }}</td>
                <td>{{ $aptk->linkgmaps }}</td>
            </tr>
            @endforeach
        </table>
 
    </div>
@endsection