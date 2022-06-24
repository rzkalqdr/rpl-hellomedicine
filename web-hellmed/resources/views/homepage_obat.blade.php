<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Hello Medicine website favicon -->
    <link rel="shortcut icon" href="img/brand_hellomed.svg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Fonts CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <!-- Hello Medicine external CSS -->
    <link rel="stylesheet" href="{{ asset('css\hellomedicine.css') }}">
    <title>Hello Medicine</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <div class="col">
                <a class="navbar-brand me-3" href="#">
                    <img src="img/brand_hellomed.svg" alt="" width="40" height="40" class="d-inline-block align-text-top">
                    <span id="hellomed-brand">Hello Medicine</span>
                </a>
            </div>
            <div class="col-8">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent" href="/">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent" href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent" href="/">Tanya Dokter</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent" href="/rumahsakit">Rumah Sakit</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent" href="#">Apotek</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link hellomed-accent active" aria-current="page" href="#">Beli Obat</a>
                    </li>
                </ul>
            </div>

            <div class="col-2">
                <div class="text-end">
                    @auth
                    Welcome, {{ auth()->user()->username }}
                    <form action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-warning me-2">Logout</button>
                    </form>
                    @else
                    <a href="/login"><button class="btn btn-outline-success me-2" type="button" style="margin-right: 30px;">Login</button></a>
                    <a href="/register"><button class="btn btn-success" type="button">Daftar</button></a>
                    @endauth
                </div>
            </div>
        </div>

    </nav>

    <div class="container">
        <!-- Form pencarian -->
		<div class="row mt-3 justify-content-center">
			<div class="col-md-8">
				<h1 class="text-center mt-3 mb-3">Catalog Obat</h1>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Cari obat..." id="search-input">
					<button class="btn btn-success" type="button" id="search-button">Search</button>
				</div>
			</div>
		</div>
    </div>
    <div class="container">
        <div class="row" id="obat-catalog">
            @foreach ($barang as $brg)
            <div class="card m-3" style="width: 18rem;">
                <img src="https://lh4.googleusercontent.com/wo9JdR6NtrgNTW5be4YXk_fLJXEvyUx5c0XD0cGou5KRX6dl9fQkjhARO48Z89Epb2c=w1200-h630-p" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title" style="font-size: 22px;">{{ $brg->nama_barang }}</h5>
                    <p class="card-text" style="font-size: 12px;">{{ $brg->keterangan }}</p>
                    <p> Rp {{ $brg->harga }} -  Stok: {{ $brg->stok }} pcs</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#obatModal" data-namabarang="{{ $brg->nama_barang }}" data-hargabarang="{{ $brg->harga }}" data-stokbarang="{{ $brg->stok }}">Beli obat</button>
                    </div>
            </div>
            @endforeach
        </div>
    </div>


    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Beli Obat</button>
        </div>
        </div>
    </div>
    </div> -->

    <div class="modal fade" id="obatModal" tabindex="-1" role="dialog" aria-labelledby="obatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="obatModalLabel">Beli obat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">    
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://lh4.googleusercontent.com/wo9JdR6NtrgNTW5be4YXk_fLJXEvyUx5c0XD0cGou5KRX6dl9fQkjhARO48Z89Epb2c=w1200-h630-p" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-info obatNameModalInfo"></li>
                            <li class="list-group-item list-group-item-warning obatHargaModalInfo"></li>
                            <li class="list-group-item obatStokModalInfo"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <form>
            <div class="form-group">
                <label for="banyak-obat" class="col-form-label">Banyak obat:</label>
                <input type="text" class="form-control input-number" id="banyak-obat" value="1" min="1" max="10">
            </div>
            <div class="form-group">
                <label for="alamat-text" class="col-form-label">Alamat:</label>
                <textarea class="form-control" id="alamat-text"></textarea>
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">Pesan</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        $('#obatModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var selectedObatName = button.data('namabarang') // Extract info from data-* attributes
            var selectedObatHarga = button.data('hargabarang')
            var selectedObatStok = button.data('stokbarang')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Beli obat: ' + selectedObatName)
            modal.find('.obatNameModalInfo').text(selectedObatName)
            modal.find('.obatHargaModalInfo').text('Rp. ' + selectedObatHarga)
            modal.find('.obatStokModalInfo').text('Stok saat ini: ' + selectedObatStok + ' pcs')
            modal.find('.modal-body input').val(1)
        })
    </script>

</body>

</html>