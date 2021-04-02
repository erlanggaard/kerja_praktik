<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "kontak";
    protected $fillable = [
        'nama', 'alamat', 'email', 'telepon', 'status'
    ];
}
