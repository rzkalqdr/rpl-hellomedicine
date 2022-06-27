@extends('layouts.navbar')

@section('content')

    <div class=" p-5 mb-4 rounded-3">
        <div class="container-fluid py-5">
            <h1 class="hellomed-h1">Artikel Kesehatan Terkini</h1>
            <p class="col-md-8 fs-4"> </p>
            <!-- <img src="dokter.jpeg" class="imageRight"> -->
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-sm-4 mt-4">
                    <div class="card" style="width: 28rem;">
                        <img class="card-img-top" src="img/card1.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $post['title'] }}</h5>
                            <p class="card-text">{{ $post['excerpt'] }}</p>
                            <a href="/artikel/{{$post->slug}}" class="btn btn-primary">Go to article</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content center">
                {{ $posts -> links() }}
            </div>
        </div>
    </div>

@endsection