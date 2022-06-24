@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/obat" method="POST">
        @csrf
        <h3 class="mb-2 text-center">Tambah Artikel</h3>
            <div class="row mb-3">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Obat</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang"> 
                @error('nama_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="harga" class="col-sm-2 col-form-label">Harga Obat</label>
                <input type="text" class="form-control" name="harga" id="harga"> 
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="stok" class="col-sm-2 col-form-label">Stok Obat</label>
                <input type="text" class="form-control" name="stok" id="stok"> 
                @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="body" class="col-sm-2 col-form-label">Keterangan</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            
            <a href="/dashboard" class="btn btn-warning">Back To Home</a>
            <button type="submit" name="submit" class="btn btn-primary">Create</button>
    </form>
</div>

@endsection