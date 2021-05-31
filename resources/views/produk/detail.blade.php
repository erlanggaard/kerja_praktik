@extends('layout.main');

@section('container')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4> Detail Produk </h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="article-header">
                        <div class="article-image">
                            <img src="assets/img/{{$dataProduk->foto ?? 'Sample.JPG'}}" alt="{{$dataProduk->foto}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <h5>Nama Barang : {{$dataProduk->nama_barang}}</h5>
                        <p>Kode Barang : {{$dataProduk->kode_barang}} </p>
                        <p>Harga Jual : Rp. {{$dataProduk->harga_jual}} </p>
                        <p>Harga Beli : Rp. {{$dataProduk->harga_beli}} </p>
                        <p>Merk : {{$dataProduk->merk}} </p>
                        <p>Status : {{$dataProduk->status}} </p>
                        <p>Stock Menipis : {{$dataProduk->stokmenipis}} </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="{{route('produk.produk')}}" class="btn btn-primary"> Back
            </a>
        </div>
    </div>
</section>
@endsection