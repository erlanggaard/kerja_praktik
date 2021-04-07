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
                        <a href="#" class="btn btn-primary" style="float:right;">
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
                        <a href="#" class="btn btn-primary" style="float:right;">
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
                    <a href="{{ route('pelanggan.pelanggan') }}">
                        <h4>Daftar Pelanggan</h4>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Irwansyah Saputra</td>
                                <td>2017-01-09</td>
                                <td>
                                    <div class="badge badge-success">Active</div>
                                </td>
                                <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Hasan Basri</td>
                                <td>2017-01-09</td>
                                <td>
                                    <div class="badge badge-success">Active</div>
                                </td>
                                <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kusnadi</td>
                                <td>2017-01-11</td>
                                <td>
                                    <div class="badge badge-danger">Not Active</div>
                                </td>
                                <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Rizal Fakhri</td>
                                <td>2017-01-11</td>
                                <td>
                                    <div class="badge badge-success">Active</div>
                                </td>
                                <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Isnap Kiswandi</td>
                                <td>2017-01-17</td>
                                <td>
                                    <div class="badge badge-success">Active</div>
                                </td>
                                <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                        </table>
                    </div>

                    <canvas id="myChart" height="158"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card gradient-bottom">
                <div class="card-header">
                    <h4>Best Seller</h4>
                    <div class="card-header-action dropdown">
                        <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                        <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <li class="dropdown-title">Select Period</li>
                            <li><a href="#" class="dropdown-item">Today</a></li>
                            <li><a href="#" class="dropdown-item">Week</a></li>
                            <li><a href="#" class="dropdown-item active">Month</a></li>
                            <li><a href="#" class="dropdown-item">This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body" id="top-5-scroll">
                    <ul class="list-unstyled list-unstyled-border">
                        <li class="media">
                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
                            <div class="media-body">
                                <div class="float-right">
                                    <div class=" mt-3 font-weight-600 text-muted text-small">86 Terjual</div>
                                </div>
                                <div class="mt-3 media-title">
                                    oPhone S9 Limited
                                </div>
                                <div class="mt-1">
                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-4-50.png" alt="product">
                            <div class="media-body">
                                <div class="float-right">
                                    <div class="mt-3 font-weight-600 text-muted text-small">67 Terjual</div>
                                </div>
                                <div class="mt-3 media-title">iBook Pro 2018</div>
                                <div class="mt-1">

                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-1-50.png" alt="product">
                            <div class="media-body">
                                <div class="float-right">
                                    <div class="mt-3 font-weight-600 text-muted text-small">63 Terjual</div>
                                </div>
                                <div class="mt-3 media-title">Headphone Blitz</div>
                                <div class="mt-1">


                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
                            <div class="media-body">
                                <div class="float-right">
                                    <div class="mt-3 font-weight-600 text-muted text-small">28 Terjual</div>
                                </div>
                                <div class=" mt-3 media-title">oPhone X Lite</div>
                                <div class="mt-1">

                                </div>
                            </div>
                        </li>
                        <li class="media">
                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-5-50.png" alt="product">
                            <div class="media-body">
                                <div class="float-right">
                                    <div class="mt-3 font-weight-600 text-muted text-small">19 Terjual</div>
                                </div>
                                <div class="mt-3 media-title">Old Camera</div>
                                <div class="mt-1">

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer pt-3 d-flex justify-content-center">
                    <div class="budget-price justify-content-center">


                    </div>
                    <div class="budget-price justify-content-center">


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection