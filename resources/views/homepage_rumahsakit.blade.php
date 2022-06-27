@extends('layouts.navbar')

@section('content')

    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>Nama RS</th>
                    <th>Alamat RS</th>
                </tr>

                @foreach ($rumahsakit as $rs)
                <tr>
                    <td>{{ $rs->idRS }}</td>
                    <td>{{ $rs->namaRS }}</td>
                    <td>{{ $rs->alamatRS }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection