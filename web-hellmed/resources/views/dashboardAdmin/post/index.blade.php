@extends('dashboardAdmin.layouts.main')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Data Artikel</h1>
    </div>
    <div class="d-flex p-2">
        <a href="/dashboard/artikel/create" class="btn btn-primary">Tambah Artikel</a>
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
                <th>Judul</th>
                <th>Body</th>
            </tr>
            
            @foreach ($posts as $post)
            <tr>
                <td><a href="/dashboard/artikel/{{ $post->slug }}/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/artikel/{{ $post->slug }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
            </tr>
            @endforeach
        </table>
 
    </div>
@endsection