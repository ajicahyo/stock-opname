<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'kode_barang' => 'A01',
            'nama_barang' => 'Piring',
            'stok' => 20,
        ]);
        Barang::create([
            'kode_barang' => 'A02',
            'nama_barang' => 'Gelas',
            'stok' => 40,
        ]);
        Barang::create([
            'kode_barang' => 'A03',
            'nama_barang' => 'Meja',
            'stok' => 5,
        ]);
        Barang::create([
            'kode_barang' => 'A04',
            'nama_barang' => 'Kursi',
            'stok' => 15,
        ]);
        Barang::create([
            'kode_barang' => 'A05',
            'nama_barang' => 'Sendok',
            'stok' => 120,
        ]);
    }
}
