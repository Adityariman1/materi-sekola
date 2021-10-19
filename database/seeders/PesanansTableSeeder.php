<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanans = [
            ['nama_pelanggan'=>'Adit', 'nama_barang'=>'Ciki', 'qty'=>'bagus', 'tgl_pesan'=>'2020-06-09'],
            ['nama_pelanggan'=>'Jojo', 'nama_barang'=>'Permen', 'qty'=>'bagus', 'tgl_pesan'=>'2020-07-10'],
            ['nama_pelanggan'=>'Fajar', 'nama_barang'=>'Kue', 'qty'=>'bagus', 'tgl_pesan'=>'2020-08-11'],
            ['nama_pelanggan'=>'Palah', 'nama_barang'=>'Seblak', 'qty'=>'bagus', 'tgl_pesan'=>'2020-09-12'],
            ['nama_pelanggan'=>'Rehan', 'nama_barang'=>'Nasi Goreng', 'qty'=>'bagus', 'tgl_pesan'=>'2020-10-13'],
        ];
        DB::table('pesanans')->insert($pesanans);
    }
}
