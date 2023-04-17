<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;
    protected $table = 'detail_order';
    protected $fillable = [
        'list_id',
        'keluhan',
        'foto_keluhan',
        'opsi_pengiriman',
        'pembayaran',
        'foto_pembayaran',
        'status',
    ];
}
