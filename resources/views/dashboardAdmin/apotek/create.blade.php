@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/apotek" method="POST">
        @csrf
        <h3 class="mb-2 text-center">Tambah Apotek</h3>
            <div class="row mb-3">
                <label for="namaApotek" class="col-sm-2 col-form-label">Nama Apotek</label>
                <input type="text" class="form-control @error('namaApotek') is-invalid @enderror" name="namaApotek" required value="{{ old('namaApotek') }}"> 
                @error('namaApotek')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="alamatApotek" class="col-sm-2 col-form-label">Alamat Apotek</label>
                <input type="text" class="form-control @error('alamatApotek') is-invalid @enderror" name="alamatApotek" required value="{{ old('alamatApotek') }}"> 
                @error('alamatApotek')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="linkgmaps" class="col-sm-2 col-form-label">Link Maps</label>
                <input type="text" class="form-control @error('linkgmaps') is-invalid @enderror" name="linkgmaps" required value="{{ old('linkgmaps') }}"> 
                @error('linkgmaps')
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