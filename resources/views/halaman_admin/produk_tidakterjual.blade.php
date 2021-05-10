@extends('layout/main')

@section('container')
<div class="row">
    <div class="col-md-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>PRODUK TIDAK TERJUAL</h4>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabel_produk_terjual" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Penjualan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($penjualan as $brg_terjual )
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$brg_terjual->kode_penjualan}}</td>
                                        <td>{{$brg_terjual->bayar}}</td>
                                        <td>{{$brg_terjual->pendapatan}}</td>
                                        <td>{{$brg_terjual->waktutransaksi}}</td>
                                        <td>
                                            <a href="detail-produk-terjual" class="badge badge-success">Detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection