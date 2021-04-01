@extends('layout.main')

@section('container')
    <div class="col-lg-12">
            <div class="card">
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
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </table>
                    </div>

                    <canvas id="myChart" height="158"></canvas>
                </div>
            </div>
        </div>
@endsection