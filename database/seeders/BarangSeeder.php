<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
        [
            [
                'barang_id' => 1,
                'kategori_id' => 01,
                'barang_kode' => 'B1',
                'barang_nama' => 'Uniqlo',
                'harga_beli' => 300000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 01,
                'barang_kode' => 'B2',
                'barang_nama' => 'H&M',
                'harga_beli' => 100000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 02,
                'barang_kode' => 'B3',
                'barang_nama' => 'Indomie',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 02,
                'barang_kode' => 'B4',
                'barang_nama' => 'Bakso Frozen',
                'harga_beli' => 10000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 03,
                'barang_kode' => 'B5',
                'barang_nama' => 'Paramex',
                'harga_beli' => 5000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 03,
                'barang_kode' => 'B6',
                'barang_nama' => 'Decolgen',
                'harga_beli' => 5000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 04,
                'barang_kode' => 'B7',
                'barang_nama' => 'Kucing',
                'harga_beli' => 200000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 04,
                'barang_kode' => 'B8',
                'barang_nama' => 'Kelinci',
                'harga_beli' => 50000,
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 05,
                'barang_kode' => 'B9',
                'barang_nama' => 'Sapu',
                'harga_beli' => 20000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' =>  05,
                'barang_kode' => 'B10',
                'barang_nama' => 'Kipas Angin',
                'harga_beli' => 150000,
                'harga_jual' => 150000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
