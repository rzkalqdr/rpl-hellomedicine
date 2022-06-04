@extends('dashboardAdmin.layouts.main')

@section('content')
<div class="col-lg-12">
    <form action="/dashboard/artikel" method="POST">
        @csrf
        <h3 class="mb-2 text-center">Tambah Artikel</h3>
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required value="{{ old('title') }}"> 
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" required value="{{ old('slug') }}"> 
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label for="category" class="col-sm-2 col-form-label">Category</label>
                <select class="form-select form-select-sm" name="category_id" required">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
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