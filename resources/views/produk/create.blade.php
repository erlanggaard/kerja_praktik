@extends('layout.main')

@section('container')
<section class="section">
    <div class="card mt-2">
        <div class="card-header">
            <h3> Tambah Produk </h3>
        </div>
        <div class="card-body">
            <form action="{{ route('produk.simpan-produk') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input name="nama_barang" type="text" class="form-control" id="nama_barang">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" class="form-control" name="status">
                        <option>aktif</option>
                        <option>pasif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                    <input name="harga_jual" type="text" class="form-control" id="harga_jual">
                </div>
                <div class="form-group">
                    <label for="harga_beli">Harga Beli</label>
                    <input name="harga_beli" type="text" class="form-control" id="harga_beli">
                </div>
                <div class="form-group">
                    <label for="letak_rak">Letak Rak</label>
                    <input name="letak_rak" type="text" class="form-control" id="letak_rak">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input name="stok" type="text" class="form-control" id="stok">
                </div>
                <div class="form-group">
                    <label for="tanpastok">Tanpa Stok</label>
                    <select class="form-control" id="tanpastok" class="form-control" name="tanpastok">
                        <option>Y</option>
                        <option>N</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input name="merk" type="text" class="form-control" id="merk">
                </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis Barang</label>
                    <input name="jenis_barang" type="text" class="form-control" id="jenis_barang">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" id="keterangan"></textarea>
                </div>
                <div class="form-group">
                    <button href="{{ route('produk.simpan-produk') }}" type="submit"
                        class="btn btn-primary mb-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection