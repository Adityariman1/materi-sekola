<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Sukses', 'content'=>'Lorem Ipsum'],
            ['title'=>'Haruskah Cepat Sukses?', 'content'=>'Lorem Ipsum'],
            ['title'=>'Membangun Visi Misi Kesuksesan', 'content'=>'Lorem Ipsum']
        ];
        //msukan data ke database
        DB::table('posts')->insert($posts);
    }
}
