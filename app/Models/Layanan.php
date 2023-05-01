<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $fillable = [
        'ikon_layanan',
        'nama_layanan',
        'deskripsi_layanan',
        'keluhan'
    ];

    public function sublayanan()
    {
        return $this->hasMany(SubLayanan::class);
    }
}