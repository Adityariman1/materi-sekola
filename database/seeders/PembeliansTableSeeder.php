<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelians = [
            ['nama_barang'=>'Ciki', 'nama_suplier'=>'Adit', 'qty'=>'bagus', 'tgl'=>'2021-01-10'],
            ['nama_barang'=>'Permen', 'nama_suplier'=>'Jojo', 'qty'=>'bagus', 'tgl'=>'2021-02-11'],
            ['nama_barang'=>'Kue', 'nama_suplier'=>'Fajar', 'qty'=>'bagus', 'tgl'=>'2021-03-12'],
            ['nama_barang'=>'Seblak', 'nama_suplier'=>'Palah', 'qty'=>'bagus', 'tgl'=>'2021-04-13'],
            ['nama_barang'=>'Nasi Goreng', 'nama_suplier'=>'Rehan', 'qty'=>'bagus', 'tgl'=>'2021-05-14'],
        ];
        DB::table('pembelians')->insert($pembelians);
    }
}
