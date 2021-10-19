<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SupliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supliers = [
            ['nama'=>'Adit', 'alamat'=>'Bandung', 'kode_pos'=>'123', 'kota'=>'Bandung'],
            ['nama'=>'Jojo', 'alamat'=>'Bandung', 'kode_pos'=>'124', 'kota'=>'Bandung'],
            ['nama'=>'Fajar', 'alamat'=>'Bandung', 'kode_pos'=>'125', 'kota'=>'Bandung'],
            ['nama'=>'Palah', 'alamat'=>'Bandung', 'kode_pos'=>'126', 'kota'=>'Bandung'],
            ['nama'=>'Rehan', 'alamat'=>'Bandung', 'kode_pos'=>'127', 'kota'=>'Bandung']
        ];
        DB::table('supliers')->insert($supliers);
    }
}
