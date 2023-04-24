<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubLayanan extends Model
{
    use HasFactory;
    protected $table = 'sublayanan';
    protected $fillable = [
        'layanan_id',
        'nama_sub',
        'deskripsi_sub',
        'waktu_sub',
        'harga_sub',
        'barang_sub'
    ];

}
