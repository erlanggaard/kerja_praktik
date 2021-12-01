@extends('layout/main');

@section('container')

<section class="section">
    <div class="card">
        <div class="card-header">
            <h3>Stock Produk</h3>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="tabel_produk_terjual" class="table table-striped table-md">
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
                        <td><a href="{{ url("edit",$item->id) }}" class="btn btn-sm btn-info"> Edit </a>
                            |
                            <form action="{{ route('produk.delete-produk', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger text-light"> Delete </button>

                            </form>
                        </td>
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
    </div>
</section>


@endsection