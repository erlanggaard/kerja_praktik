@extends('layout.main');

@section('container')

<a href="{{route('produk.produk')}}"> Back </a>

<p>detail produk</p>



<p> kode Barang : {{$dataProduk->kode_barang}} </p>
<p> kode User : {{$dataProduk->kode_user}} </p>
{{-- <p> kode barang : {{$dataProduk->kode_barang}} </p>
<p> kode barang : {{$dataProduk->kode_barang}} </p>
<p> kode barang : {{$dataProduk->kode_barang}} </p>
<p> kode barang : {{$dataProduk->kode_barang}} </p>
<p> kode barang : {{$dataProduk->kode_barang}} </p> --}}

@endsection