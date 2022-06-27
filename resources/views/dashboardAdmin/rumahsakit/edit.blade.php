@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/rumahsakit/{{ $rumahsakit->idRS }}" method="POST">
        @csrf
        @method('PUT')
            <h3 class="mb-3 text-center" style="margin-bottom: 10px">Edit Data Rumah Sakit</h3>
            <div class="row mb-3">
                <label for="id" class="col-sm-2 col-form-label">id</label>
                <input type="text" class="form-control" name="idRS" required value="{{ old('id', $rumahsakit->idRS) }}" readonly> 
            </div>
            <div class="row mb-3">
                <label for="namaRS" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
                <input type="text" class="form-control @error('namaRS') is-invalid @enderror" name="namaRS" required value="{{ old('namaRS', $rumahsakit->namaRS) }}"> 
                @error('namaRS')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="alamatRS" class="col-sm-2 col-form-label">Alamat</label>
                <input type="text" class="form-control @error('alamatRS') is-invalid @enderror" name="alamatRS" style="font-size: 12px;" required value="{{ old('alamatRS', $rumahsakit->alamatRS) }}"> 
                @error('alamatRS')
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