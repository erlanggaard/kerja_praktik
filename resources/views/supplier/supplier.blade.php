@extends('layout.main')

@section('container')
    <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Supplier</h4>
                </div>
                <div class="col-12">
                    <div class="button">
                        <a href="{{ route('supplier.create-supplier') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($dataSupplier as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ url("edit-supplier",$item->id) }}"> Edit </a> 
                                    |
                                    <a href="{{ url("delete-supplier",$item->id) }}" style="color: red"> Delete </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                            {{ $dataSupplier->links() }}                                                                      
                    </div>
                    <canvas id="myChart" height="158"></canvas>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
@endsection