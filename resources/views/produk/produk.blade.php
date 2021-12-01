@extends('layout.main')

@section('container')
<section class="section">
    <div class="card mt-2">
        <div class="card-header">
            <h3> Produk </h3>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($dataProduk as $item)
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <article class="article">
                        <div class="article-header">
                            <div class="article-image" data-background="assets/img/{{$item->foto}}"
                                alt="{{$item->foto}}">
                            </div>
                        </div>
                        <div class="article-details">
                            <p>{{$item->nama_barang}}</p>
                            <div class="article-cta">
                                <a href="{{route('produk.produkdetail', $item->id)}}" class="btn btn-primary"> Detail
                                    Produk
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        {{ $dataProduk->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection