@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/obat/{{ $barang->id }}" method="POST">
        @method('PUT')
        @csrf
        <h3 class="mb-2 text-center">Edit Obat</h3>
            <div class="row mb-3">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Obat</label>
                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" required value="{{ old('nama_barang', $barang->nama_barang) }}"> 
                @error('nama_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="harga" class="col-sm-2 col-form-label">Harga Obat</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" required value="{{ old('harga', $barang->harga) }}"> 
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="stok" class="col-sm-2 col-form-label">Stok Obat</label>
                <input type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" required value="{{ old('stok', $barang->stok) }}"> 
                @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            <div class="row mb-3">
                <label for="body" class="col-sm-2 col-form-label">Body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            
            <a href="/dashboard" class="btn btn-warning">Back To Home</a>
            <button type="submit" name="submit" class="btn btn-primary">Create</button>
    </form>
</div>
    
@endsection