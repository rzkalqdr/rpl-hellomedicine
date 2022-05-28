@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/apotek/{{ $apotek->idApotek }}" method="POST">
        @csrf
        @method('PUT')
            <h3 class="mb-3 text-center" style="margin-bottom: 10px">Edit Data Apotek</h3>
            <div class="row mb-3">
                <label for="id" class="col-sm-2 col-form-label">id</label>
                <input type="text" class="form-control" name="idApotek" required value="{{ old('id', $apotek->idApotek) }}" readonly> 
            </div>
            <div class="row mb-3">
                <label for="namaApotek" class="col-sm-2 col-form-label">Nama Apotek</label>
                <input type="text" class="form-control @error('namaApotek') is-invalid @enderror" name="namaApotek" required value="{{ old('namaApotek', $apotek->namaApotek) }}"> 
                @error('namaApotek')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="alamatApotek" class="col-sm-2 col-form-label">Alamat</label>
                <input type="text" class="form-control @error('alamatApotek') is-invalid @enderror" name="alamatApotek" style="font-size: 12px;" required value="{{ old('alamatApotek', $apotek->alamatApotek) }}"> 
                @error('alamatApotek')
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