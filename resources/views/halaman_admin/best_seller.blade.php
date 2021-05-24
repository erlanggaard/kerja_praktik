@extends('layout/main')

@section('container')
<div class="row">
    <div class="col-md-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>BEST SELLER</h4>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabel_produk_terjual" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Total Terjual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    @foreach ($best_seller as $best)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $best->kode_barang }}</td>
                                        <td>{{ $best->nama_barang }}</td>
                                        <td>{{ $best->total_penjualan }}</td>
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