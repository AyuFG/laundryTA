<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanan = [
            [
                'id' => 1,
                'nama_layanan' => 'Premium Deep Clean',
                'ikon_layanan' => 'default.png',
                'deskripsi_layanan' => 'Bersihkan sepatu anda dengan kami',
            ],
            [
                'id' => 2,
                'nama_layanan' => 'Leather Care',
                'ikon_layanan' => 'default.png',
                'deskripsi_layanan' => 'Bersihkan bahan kulit anda dengan kami',
            ],
            [
                'id' => 3,
                'nama_layanan' => 'Repaint',
                'ikon_layanan' => 'default.png',
                'deskripsi_layanan' => 'Perbarui warna barang anda dengan kami',
            ],
            [
                'id' => 4,
                'nama_layanan' => 'Repair Package',
                'ikon_layanan' => 'default.png',
                'deskripsi_layanan' => 'Perbaiki barang anda dengan kami',
            ],
        ];
        Layanan::query()->insert($layanan);
    }
}
