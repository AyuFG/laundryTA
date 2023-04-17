<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubLayanan extends Model
{
    use HasFactory;
    protected $table = 'sublayanan';
    protected $fillable = [
        'nama_sub',
        'desc_sub',
        'est_sub',
        'harga_sub',
        'jenis_barang',
    ];

}
