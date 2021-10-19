<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama'=>'Adit', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Bandung', 'kode_pos'=>'123', 'kota'=>'Bandung', 'tgl_lahir'=>'2004-06-09'],
            ['nama'=>'Jojo', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Bandung', 'kode_pos'=>'124', 'kota'=>'Bandung', 'tgl_lahir'=>'2004-02-29'],
            ['nama'=>'Fajar', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Bandung', 'kode_pos'=>'125', 'kota'=>'Bandung', 'tgl_lahir'=>'2004-09-10'],
            ['nama'=>'Palah', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Bandung', 'kode_pos'=>'126', 'kota'=>'Bandung', 'tgl_lahir'=>'2004-10-11'],
            ['nama'=>'Rehan', 'jns_kelamin'=>'Laki-laki', 'alamat'=>'Bandung', 'kode_pos'=>'127', 'kota'=>'Bandung', 'tgl_lahir'=>'2004-11-12'],
        ];
        DB::table('pembelis')->insert($pembelis);
    }
}
