@extends('layout.main')

@section('container')
    <div class="col-lg-12">
            <div class="card d-flex justify-content-between">
                <div class="card-header">
                    <h4>Daftar Pelanggan dan Supplier</h4>
                </div>
                <div class="button">
                    <a href="{{ route('supplier.create-supplier') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Primary</a>
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
@endsection