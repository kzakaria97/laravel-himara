<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([            
            [
                'title' => 'Restaurant',
                'text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
                'icon' => 'Restaurant',
                'url' => 'restaurant.jpg',
            ],
            [
                'title' => 'Spa',
                'text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
                'icon' => 'Spa',
                'url' => 'spa.jpg',
            ],
            [
                'title' => 'Conference Room',
                'text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
                'icon' => 'Conference Room',
                'url' => 'conference.jpg',
            ],
            [
                'title' => 'Swimming Pool',
                'text' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
                'icon' => 'Swimming Pool',
                'url' => 'swimming.jpg',
            ],
        ]);
    }
}
