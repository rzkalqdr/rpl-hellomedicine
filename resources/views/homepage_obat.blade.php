@extends('layouts.navbar')

@section('content')
    <div class="container">
        <!-- Title & form pencarian -->
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

    <!-- Card isi katalog obat -->
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

@endsection