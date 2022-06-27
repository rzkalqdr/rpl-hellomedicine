@extends('layouts.navbar')

@section('content')
<div class="container">
    <!-- Title & form pencarian -->
    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mt-3 mb-3">Tempat Vaksin yang Tersedia</h1>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari tempat..." id="search-input">
                <button class="btn btn-success" type="button" id="search-button">Search</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" id="tempatVaksin-catalog">
        @foreach ($tempatVaksin as $tmpt)
        <div class="card m-3" style="width: 18rem;">
            <img src="https://awsimages.detik.net.id/community/media/visual/2021/12/07/mulai-januari-2022-vaksin-booster-bakal-tersedia-untuk-publik-4_169.jpeg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 22px;">{{ $tmpt->namaTempatVaksin }}</h5>
                <p class="card-text" style="font-size: 18px;"> {{ $tmpt->alamatVaksin }}</p>
                <a href="{{ $tmpt->linkgmaps }}" class="btn btn-info" role="button" target=”_blank”><i class="fa fa-location-arrow"></i> Open in Google Maps </a>
                <p></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tempatVaksinModal" data-namaTempatVaksin="{{ $tmpt->namaTempatVaksin }}" data-alamatTempatVaksin="{{ $tmpt->alamatVaksin }}" data-gmapsTempatVaksin="{{ $tmpt->linkgmaps }}">Informasi Tempat Vaksin</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="modal fade" id="tempatVaksinModal" tabindex="-1" role="dialog" aria-labelledby="tempatVaksinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tempatVaksinModalLabel">tempatVaksin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://awsimages.detik.net.id/community/media/visual/2021/12/07/mulai-januari-2022-vaksin-booster-bakal-tersedia-untuk-publik-4_169.jpeg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info tempatVaksinNameModalInfo"></li>
                                <li class="list-group-item list-group-item-warning tempatVaksinAlamatModalInfo"></li>
                                <li class="list-group-item tempatVaksinGMapsModalInfo" style="height: 400px; "></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-location-arrow"></i> Open in Google Maps</button>
            </div>
        </div>
    </div>
</div>

<!-- Show modal with information script -->
<script>
    $('#tempatVaksinModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var selectedTempatVaksinName = button.data('namaTempatVaksin');
        var selectedTempatVaksinAlamat = button.data('alamatTempatVaksin');
        var selectedTempatVaksinGMapsLink = button.data('gmapsTempatVaksin');

        var modal = $(this)
        modal.find('.modal-title').text('Tempat Vaksin: ' + selectedTempatVaksinName)
        modal.find('.tempatVaksinNameModalInfo').text(selectedTempatVaksinName)
        modal.find('.tempatVaksinAlamatModalInfo').text(selectedTempatVaksinAlamat)
        // modal.find('.tempatVaksinGMapsModalInfo').text(selectedTempatVaksinGMapsLink)
    })
</script>
@endsection