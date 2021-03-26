@extends('layout/main')

@section('title', 'Daftar Barang')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-10">Daftar Barang</h1>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jenis Barang</th>
                        <th scope="col">Status</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $brg)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td scope="row">{{$brg->nama_barang}}</td>
                        <td scope="row">{{$brg->jenis_barang}}</td>
                        <td scope="row">{{$brg->status}}</td>
                        <td scope="row">{{$brg->harga_jual}}</td>
                        <td>
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection