<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Model
{
    protected $table = "kontak";
    protected $fillable = [
        'nama', 'alamat', 'email', 'telepon', 'status'
    ];
}
