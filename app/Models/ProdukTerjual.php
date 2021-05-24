<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkTerjual extends Model
{
    use HasFactory;
    protected $table = "penjualan";
    protected $fillable = [
        'kode_penjualan', 'bayar', 'pendapatan', 'waktutransaksi', 'tipe', 'status'
    ];
}
