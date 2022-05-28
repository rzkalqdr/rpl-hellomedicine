@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/users/{{ $user->idUser }}" method="POST">
        @csrf
        @method('PUT')
            <h3 class="mb-3 text-center" style="margin-bottom: 10px">Edit User</h3>
            <div class="row mb-3">
                <label for="id" class="col-sm-2 col-form-label">id</label>
                <input type="text" class="form-control" name="id" required value="{{ old('id', $user->idUser) }}" readonly> 
            </div>
            <div class="row mb-3">
                <label for="displayname" class="col-sm-2 col-form-label">Display Name</label>
                <input type="text" class="form-control @error('displayname') is-invalid @enderror" name="displayname" required value="{{ old('displayname', $user->displayname) }}"> 
                @error('displayname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" style="font-size: 12px;" required value="{{ old('username', $user->username) }}"> 
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="is_admin" class="col-sm-2 col-form-label">Admin</label>
                <input type="text" class="form-control @error('is_admin') is-invalid @enderror" name="is_admin" style="font-size: 12px;" required value="{{ old('is_admin', $user->is_admin) }}"> 
                @error('is_admin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <a href="/dashboard" class="btn btn-warning">Back To Users</a>
            <button type="submit" name="submit" class="btn btn-primary">Edit Users</button>
    </form>
</div>

@endsection