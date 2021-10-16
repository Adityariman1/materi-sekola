<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
            ['name'=>'Aditya', 'borndate'=>'2004-06-09', 'gender'=>'Laki-laki', 'address'=>'Bandung', 'religion'=>'Islam', 'age'=>'17', 'hobby'=>'Berenang'],
            ['name'=>'Fajar', 'borndate'=>'2004-08-20', 'gender'=>'Laki-laki', 'address'=>'Bandung', 'religion'=>'Islam', 'age'=>'17', 'hobby'=>'Memancing'],
            ['name'=>'Sandi', 'borndate'=>'2003-05-29', 'gender'=>'Laki-laki', 'address'=>'Bandung', 'religion'=>'Islam', 'age'=>'18', 'hobby'=>'Main Bola'],
            ['name'=>'Jojo', 'borndate'=>'2004-02-29', 'gender'=>'Laki-laki', 'address'=>'Bandung', 'religion'=>'Islam', 'age'=>'17', 'hobby'=>'Main Golf'],
            ['name'=>'Rehan', 'borndate'=>'2004-04-23', 'gender'=>'Laki-laki', 'address'=>'Bandung', 'religion'=>'Islam', 'age'=>'17', 'hobby'=>'Main Basket']
        ];
        //msukan data ke database
        DB::table('biodatas')->insert($biodatas);
    }
}
