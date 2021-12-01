<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "barang";
    protected $fillable = [
        'nama_barang', 'status', 'harga_jual', 'harga_beli', 'stok',
        'merk', 'jenis_barang', 'stokmenipis', 'tanpastok', 'keterangan'
    ];
}
