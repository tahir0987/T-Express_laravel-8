<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Samsung J3',
                'price'=>'12950',
                'category'=>'Mobile',
                'gallery'=>'https://mobilemall.pk/public_html/images/no_image.png',
                'description'=>'Samsung smart 4 with dual processor'
            ],
            [
                'name'=>'Vivo S1',
                'price'=>'11250',
                'category'=>'Mobile',
                'gallery'=>'https://st1.bgr.in/wp-content/uploads/2021/03/vivo-x60-2.jpg',
                'description'=>'Vivo s1 have 32 mega pixel AI camera'
            ],
            [
                'name'=>'realme C3',
                'price'=>'15600',
                'category'=>'Mobile',
                'gallery'=>'https://static.toiimg.com/photo/msid-80167725/80167725.jpg',
                'description'=>'Realme c3 64 Gb memory, AI camera'
            ],
            [
                'name'=>'Poko 95',
                'price'=>'8950',
                'category'=>'Mobile',
                'gallery'=>'https://sm.mashable.com/t/mashable_in/photo/default/185fd7c49bf8a6f803c004e652e3071de1bb161c_5cpn.960.jpg',
                'description'=>'Poko smart 95 dual battery 32 GB internal 4GB ram '
            ]]
        );
    }
}
