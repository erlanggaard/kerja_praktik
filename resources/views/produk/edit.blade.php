@extends('layout.main')

@section('container')
<section class="section">
    <div class="card mt-2">
        <div class="card-header">
            <h3> Edit Produk </h3>
        </div>
        <div class="card-body">
            <form action="{{ route('produk.update-produk', $prod->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input name="nama_barang" type="text" class="form-control" id="nama_barang"
                        value="{{ $prod->nama_barang }}">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" class="form-control" name="status">
                        <option selected="{{ $prod->status==" aktif" }}">aktif</option>
                        <option selected="{{ $prod->status==" pasif" }}">pasif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                    <input name="harga_jual" type="text" class="form-control" id="harga_jual"
                        value="{{ $prod->harga_jual }}">
                </div>
                <div class="form-group">
                    <label for="harga_beli">Harga Beli</label>
                    <input name="harga_beli" type="text" class="form-control" id="harga_beli"
                        value="{{ $prod->harga_beli }}">
                </div>
                <div class="form-group">
                    <label for="letak_rak">Letak Rak</label>
                    <input name="letak_rak" type="text" class="form-control" id="letak_rak"
                        value="{{ $prod->letak_rak }}">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input name="stok" type="text" class="form-control" id="stok" value="{{ $prod->stok }}">
                </div>
                <div class="form-group">
                    <label for="tanpastok">Tanpa Stok</label>
                    <select class="form-control" id="tanpastok" class="form-control" name="tanpastok">
                        <option selected="{{ $prod->tanpastok==" Y" }}">Y</option>
                        <option selected="{{ $prod->tanpastok==" N" }}">N</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input name="merk" type="text" class="form-control" id="merk" value="{{ $prod->merk }}">
                </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis Barang</label>
                    <input name="jenis_barang" type="text" class="form-control" id="jenis_barang"
                        value="{{ $prod->jenis_barang }}">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="keterangan">{{ $prod->keterangan }}</textarea>
                </div>
                <div class="form-group">
                    <label for="stokmenipis">Stok Menipis</label>
                    <input name="stokmenipis" type="text" class="form-control" id="stokmenipis"
                        value="{{ $prod->stokmenipis }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mb-4">Submit</button>
                </div>
            </form>




        </div>
    </div>
</section>
@endsection