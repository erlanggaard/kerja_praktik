@extends('layout/main');

@section('container')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>Stock Produk</h4>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>Nama Barang</th>
                        <th>Status</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stock</th>
                        <th>Merk</th>
                        <th>Jenis Barang</th>
                    </tr>
                    @foreach ($dataProduk as $item)
                    <tr>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->harga_jual }}</td>
                        <td>{{ $item->harga_beli }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->merk }}</td>
                        <td>{{ $item->jenis_barang }}</td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    {{ $dataProduk->links() }}
                </ul>
            </nav>
        </div>
</section>


@endsection