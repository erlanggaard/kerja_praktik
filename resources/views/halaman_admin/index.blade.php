@extends('layout/main')

@section('container')
<section class="section">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                    <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>PRODUK</h4>
                    </div>
                    <div class="card-body">
                        2.181
                        <a href="{{ route('produk.produk') }}" class="btn btn-primary" style="float:right;">
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                    <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>TERJUAL</h4>
                    </div>
                    <div class="card-body">
                        4,732
                        <a href="produk-terjual" class="btn btn-primary" style="float:right;">
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                    <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>TIDAK TERJUAL</h4>
                    </div>
                    <div class="card-body">
                        4,732
                        <a href="produk-tidakterjual" class="btn btn-primary" style="float:right;">
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <a href="best_seller">
                        <h4>Daftar Produk Best Seller</h4>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tabel_produk_terjual" class="table table-striped table-md">
                            <tr>
                                <th>No</th>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Total Penjualan</th>
                            </tr>

                        </table>

                    </div>

                    <canvas id="myChart" height="158"></canvas>
                </div>

            </div>

        </div>

    </div>
    </div>
</section>
@endsection