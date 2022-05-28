@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/dokter/{{ $dokter->idDokter }}" method="POST">
        @csrf
        @method('PUT')
            <h3 class="mb-3 text-center" style="margin-bottom: 10px">Edit Data Apotek</h3>
            <div class="row mb-3">
                <label for="idDokter" class="col-sm-2 col-form-label">id Dokter</label>
                <input type="text" class="form-control" name="idDokter" required value="{{ old('idDokter', $dokter->idDokter) }}" readonly> 
            </div>
            <div class="row mb-3">
                <label for="idUser" class="col-sm-2 col-form-label">ID User</label>
                <select class="form-select form-select-sm @error('idUser') is-invalid @enderror" aria-label=".form-select-sm example" name="idUser" required">
                    @foreach ($user as $usr)
                        @if (old('idUser', $dokter->idUser) == $usr->idUser)
                            <option value="{{ $usr->idUser }}" selected>{{ $usr->idUser }}</option>
                        @else
                            <option value="{{ $usr->idUser }}" selected>{{ $usr->idUser }}</option>
                        @endif
                    @endforeach
                </select>
                @error('idUser')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
                <label for="namaDokter" class="col-sm-2 col-form-label">Nama Dokter</label>
                <input type="text" class="form-control @error('namaDokter') is-invalid @enderror" name="namaDokter" required value="{{ old('namaDokter', $dokter->namaDokter) }}"> 
                @error('namaDokter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="Spesialisasi" class="col-sm-2 col-form-label">Spesialisasi</label>
                <input type="text" class="form-control @error('Spesialisasi') is-invalid @enderror" name="Spesialisasi" required value="{{ old('Spesialisasi', $dokter->Spesialisasi) }}"> 
                @error('Spesialisasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="NomorSTR" class="col-sm-2 col-form-label">Nomor STR</label>
                <input type="text" class="form-control @error('NomorSTR') is-invalid @enderror" name="NomorSTR" required value="{{ old('NomorSTR', $dokter->NomorSTR) }}"> 
                @error('NomorSTR')
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