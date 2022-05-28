@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/rumahsakit" method="POST">
        @csrf
        <h3 class="mb-2 text-center">Tambah Rumah Sakit</h3>
            <div class="row mb-3">
                <label for="namaRS" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
                <input type="text" class="form-control @error('namaRS') is-invalid @enderror" name="namaRS" required value="{{ old('namaRS') }}"> 
                @error('namaRS')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="alamatRS" class="col-sm-2 col-form-label">Alamat Rumah Sakit</label>
                <input type="text" class="form-control @error('alamatRS') is-invalid @enderror" name="alamatRS" required value="{{ old('alamatRS') }}"> 
                @error('alamatRS')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <a href="/dashboard" class="btn btn-warning">Back To Home</a>
            <button type="submit" name="submit" class="btn btn-primary">Create</button>
    </form>
</div>
    
@endsection