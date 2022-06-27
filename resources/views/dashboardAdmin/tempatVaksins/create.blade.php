@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/tempatVaksin" method="POST">
        @csrf
        <h3 class="mb-2 text-center">Tambah Tempat Vaksin</h3>
            <div class="row mb-3">
                <label for="namatempatVaksin" class="col-sm-2 col-form-label">Nama Tempat Vaksin</label>
                <input type="text" class="form-control @error('namatempatVaksin') is-invalid @enderror" name="namatempatVaksin" required value="{{ old('namatempatVaksin') }}"> 
                @error('namatempatVaksin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="alamatVaksin" class="col-sm-2 col-form-label">Alamat Vaksin</label>
                <input type="text" class="form-control @error('alamatVaksin') is-invalid @enderror" name="alamatVaksin" required value="{{ old('alamatVaksin') }}"> 
                @error('alamatVaksin')
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