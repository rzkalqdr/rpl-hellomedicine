@extends('layouts.navbar')

@section('content')

<div class="container">
    <!-- Title & form pencarian -->
    <div class="row mt-3 justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center mt-3 mb-3">Apotek Terdaftar</h1>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari apotek..." id="search-input">
                <button class="btn btn-success" type="button" id="search-button">Search</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" id="apotek-list">
        @foreach ($apotek as $aptk)
        <div class="card m-3" style="width: 18rem;">
            <img src="https://kimiafarma.co.id/images/BeritaKorporat/kemenkes.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title" style="font-size: 22px;">{{ $aptk->namaApotek }}</h5>
                <p>{{ $aptk->alamatApotek }}</p>
                <a href="{{ $aptk->linkgmaps }}" class="btn btn-info" role="button" target=”_blank”><i class="fa fa-location-arrow"></i> Open in Google Maps </a>
                <p></p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#apotekModal" data-namaapotek="{{ $aptk->namaApotek }}" data-alamatapotek="{{ $aptk->alamatApotek }}" data-gmapsapotek="{{ $aptk->linkgmaps }}" data-latapotek="{{ $aptk->latitude }}" data-lngapotek="{{ $aptk->longitude }}">Buka Informasi Apotek</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class=" modal fade" id="apotekModal" tabindex="-1" role="dialog" aria-labelledby="apotekModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="obatModalLabel">Apotek</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://kimiafarma.co.id/images/BeritaKorporat/kemenkes.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info apotekNameModalInfo"></li>
                                <li class="list-group-item list-group-item-warning apotekAlamatModalInfo"></li>
                                <li class="list-group-item apotekGMapsModalInfo" style="height: 400px; ">
                                    <div id="map" style="margin: 10px;">
                                        <script>
                                            mapboxgl.accessToken = 'pk.eyJ1IjoicnprYWxxZHIiLCJhIjoiY2w0Ymo1enJlMW5iNDNqbGxyeDl6MzRsdSJ9.iQKZZZJrmV6SYug7tNtn9Q';
                                            const map = new mapboxgl.Map({
                                                container: 'map', // container ID
                                                style: 'mapbox://styles/mapbox/streets-v11', // style URL
                                                center: [101.4452723, 0.4875891], // starting position [lng, lat]
                                                zoom: 14 // starting zoom
                                            });
                                            const marker = new mapboxgl.Marker().setLngLat([{
                                                {
                                                    $aptk - > longitude
                                                }
                                            }, {
                                                {
                                                    $aptk - > longitude
                                                }
                                            }, ]).addTo(map);
                                        </script>
                                    </div>
                                </li>
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

<!-- <div class="modal fade" id="apotekModal" tabindex="-1" role="dialog" aria-labelledby="apotekModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="apotekModalLabel">Apotek</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://kimiafarma.co.id/images/BeritaKorporat/kemenkes.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info apotekNameModalInfo"></li>
                                <li class="list-group-item list-group-item-warning apotekAlamatModalInfo"></li>
                                <li class="list-group-item apotekMapsModalInfo"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Pesan</button>
            </div>
        </div>
    </div>
</div> -->

<!-- Show modal with information script -->
<script>
    $('#apotekModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var selectedApotekName = button.data('namaapotek');
        var selectedApotekAlamat = button.data('alamatapotek');
        var selectedApotekGMapsLink = button.data('gmapsapotek');

        var modal = $(this)
        modal.find('.modal-title').text('Apotek: ' + selectedApotekName)
        modal.find('.apotekNameModalInfo').text(selectedApotekName)
        modal.find('.apotekAlamatModalInfo').text(selectedApotekAlamat)
        // modal.find('.apotekGMapsModalInfo').text(selectedApotekGMapsLink)
    })
</script>

<!-- Search form -->
<script>
    $('#search-button').on('click', function() {
        search();
    });

    $('#search-input').on('keyup', function(e) {
        if (e.which === 13) {
            search();
        }
    });

    function search() {
        $('apotek-list').html('');
        var searchApotekInput = $('#search-input').val();
    }
</script>

<!-- Google Maps API Script (not working/deprecated because of billing problems)-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=<MYKEY>&callback=initMap&v=weekly" defer></script>
<script>
    function initMap() {
        const testapotek = {
            lat: 0.4875891,
            lng: 101.4452723
        };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 20,
            center: testapotek,
        });

        const marker = new google.maps.Marker({
            position: testapotek,
            map: map,
        });
    }

    window.initMap = initMap;
</script> -->

@endsection