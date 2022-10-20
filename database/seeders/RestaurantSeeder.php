<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([            
            [
                'title' => 'Himara restaurant',
                'subTitle' => 'LIVE A GOURMET DINING EXPERIENCE',
                'plat' => 'spaghetti bolo',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae vero magni...',
                'img' => 'restaurant1.jpg',
                'price' => 19.99,
            ],
            [
                'title' => '',
                'subTitle' => '',
                'plat' => 'spaghetti bolooo',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae vero magni...',
                'img' => 'restaurant2.jpg',
                'price' => 14.99,
            ],
        ]);
    }
}
