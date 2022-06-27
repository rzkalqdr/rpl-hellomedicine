@extends('layouts.navbar')

@section('content')

    <div class=" p-5 mb-4 rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5" style="font-weight:1000; font-size: 29px; margin-left: 10px; color: #72C985;">
                Konsultasi Langsung Dengan Dokter</h1>
            <p class="col-md-8 fs-4">Chat dokter, kunjungi rumah sakit terdekat, informasi vaksin, beli obat dan<br>
                artikel seputar kesehatan, tersedia di Hello Medicine!</p>
            <div class="row">
                <div class="col-md-2">
                    <div class="card" style="width: 10rem;">
                        <div class="card-body">
                            <img src="img/icon_doctor.png">
                            <p class="card-text" style="margin-top: 5px;">Chat Dokter</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 10rem;">
                        <div class="card-body">
                            <img src="img/icon_vaccine.png">
                            <p class="card-text" style="margin-top: 5px;">Vaksinasi</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card" style="width: 10rem;">
                        <div class="card-body">
                            <img src="img/icon_medicine.png">
                            <p class="card-text" style="margin-top: 5px;">Beli Obat</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <img src="dokter.jpeg" class="imageRight"> -->
        </div>
    </div>

@endsection