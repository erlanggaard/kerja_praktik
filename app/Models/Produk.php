<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
    protected $table = "barang";
    //public $timestamps = false;
    protected $fillable = [
        'nama_barang', 'status', 'harga_jual', 'harga_beli', 'stok',
        'merk', 'jenis_barang', 'stokmenipis', 'tanpastok', 'keterangan', 'letak_rak', 'kode_user', 'kode_barang'
    ];
}
