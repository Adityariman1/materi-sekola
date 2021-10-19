<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama'=>'Ciki', 'varian'=>'Coklat', 'harga_beli'=>'15000', 'harga_jual'=>'20000'],
            ['nama'=>'Permen', 'varian'=>'Stroberi', 'harga_beli'=>'5000', 'harga_jual'=>'7000'],
            ['nama'=>'Kue', 'varian'=>'Moca', 'harga_beli'=>'20000', 'harga_jual'=>'30000'],
            ['nama'=>'Seblak', 'varian'=>'Pedas', 'harga_beli'=>'4000', 'harga_jual'=>'5000'],
            ['nama'=>'Nasi Goreng', 'varian'=>'Pedas', 'harga_beli'=>'18000', 'harga_jual'=>'20000']
        ];
        DB::table('barangs')->insert($barangs);
    }
}
