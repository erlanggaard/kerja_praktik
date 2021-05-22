@extends('layout/main')

@section('container')
<div class="row">
    <div class="col-md-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>PRODUK TERJUAL</h4>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabel_produk_terjual" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Transaksi</th>
                                        <th>Bayar</th>
                                        <th>Pendapatan</th>
                                        <th>Waktu Transaksi</th>
                                        <th>Tipe</th>
                                        <th>Status</th> 
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
                                        <td>{{$brg_terjual->tipe}}</td>
                                        <td>{{$brg_terjual->status}}</td>
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