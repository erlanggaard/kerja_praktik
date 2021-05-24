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
                                        <th>Penjualan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tidak_terjual as $tt )
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$tt->kode_barang}}</td>
                                        <td>{{$tt->nama_barang}}</td>
                                        <td>{{$tt->total_penjualan}}</td>
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