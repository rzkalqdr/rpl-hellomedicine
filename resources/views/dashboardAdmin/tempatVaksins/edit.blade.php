@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/tempatVaksin/{{ $tempatVaksin->idVaksin }}" method="POST">
        @csrf
        @method('PUT')
            <h3 class="mb-3 text-center" style="margin-bottom: 10px">Edit Data Tempat Vaksin</h3>
            <div class="row mb-3">
                <label for="id" class="col-sm-2 col-form-label">id</label>
                <input type="text" class="form-control" name="idVaksin" required value="{{ old('id', $tempatVaksin->idVaksin) }}" readonly> 
            </div>
            <div class="row mb-3">
                <label for="namaTempatVaksin" class="col-sm-2 col-form-label">Nama Tempat Vaksin</label>
                <input type="text" class="form-control @error('namaTempatVaksin') is-invalid @enderror" name="namaTempatVaksin" required value="{{ old('namaTempatVaksin', $tempatVaksin->namaTempatVaksin) }}"> 
                @error('namaTempatVaksin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="alamatVaksin" class="col-sm-2 col-form-label">Alamat</label>
                <input type="text" class="form-control @error('alamatVaksin') is-invalid @enderror" name="alamatVaksin" style="font-size: 12px;" required value="{{ old('alamatVaksin', $tempatVaksin->alamatVaksin) }}"> 
                @error('alamatVaksin')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="linkgmaps" class="col-sm-2 col-form-label">Link Maps</label>
                <input type="text" class="form-control @error('linkgmaps') is-invalid @enderror" name="linkgmaps" style="font-size: 12px;" required value="{{ old('linkgmaps', $tempatVaksin->linkgmaps) }}"> 
                @error('linkgmaps')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/dashboard" class="btn btn-warning">Back To Home</a>
            <button type="submit" name="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection