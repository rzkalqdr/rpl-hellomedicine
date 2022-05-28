@extends('dashboardAdmin.layouts.main')

@section('content')
    <div class="d-flex justify-content-center">
        <h1>Data Users</h1>
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
                <th>Display Name</th>
                <th>Username</th>
                <th>Admin</th>
            </tr>
            
            @foreach ($user as $users)
            <tr>
                <td><a href="/dashboard/users/{{ $users->idUser }}/edit" class="btn btn-warning">Ubah</a></td>
                <form action="/dashboard/users/{{ $users->idUser }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger" id="btnHapus" onclick="return confirm('Are you Sure ?');">Hapus</button></td>
                </form>
                <td>{{ $users->idUser }}</td>
                <td>{{ $users->displayname }}</td>
                <td>{{ $users->username }}</td>
                <td>{{ $users->is_admin }}</td>
            </tr>
            @endforeach
        </table>
 
    </div>
@endsection