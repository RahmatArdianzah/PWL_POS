<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =
        [
            [
                'kategori_id' => 01,
                'Kategori_kode' => 'BJ',
                'kategori_nama' => 'Baju',
            ],
            [
                'kategori_id' => 02,
                'Kategori_kode' => 'FNB',
                'kategori_nama' => 'Makanan',
            ],
            [
                'kategori_id' => 03,
                'Kategori_kode' => 'MDC',
                'kategori_nama' => 'Medical',
            ],
            [
                'kategori_id' => 04,
                'Kategori_kode' => 'PET',
                'kategori_nama' => 'PET',
            ],
            [
                'kategori_id' => 05,
                'Kategori_kode' => 'HMC',
                'kategori_nama' => 'Home Care',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
