<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOrder extends Model
{
    use HasFactory;
    protected $table = 'list_order';
    protected $fillable = [
        'id_users',
        'no_order',
        'nama_users',
        'waktu_order',
        'alamat',
        'jenis_pelayanan',
        'harga',
    ];
}
