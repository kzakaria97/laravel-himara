<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GallerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([            
            [
                'url' => 'gallery1.jpg',
                'namePhoto' => 'Swimming Pool',
                'categallerie_id'=> 2
            ],
            [
                'url' => 'gallery2.jpg',
                'namePhoto' => 'Room View',
                'categallerie_id'=> 4
            ],
            [
                'url' => 'gallery3.jpg',
                'namePhoto' => 'Cocktail',
                'categallerie_id'=> 1
            ],
            [
                'url' => 'gallery4.jpg',
                'namePhoto' => 'Breakfast',
                'categallerie_id'=> 1
            ],
            [
                'url' => 'gallery5.jpg',
                'namePhoto' => 'Playground',
                'categallerie_id'=> 4
            ],
            [
                'url' => 'gallery6.jpg',
                'namePhoto' => 'Restaurant',
                'categallerie_id'=> 3
            ],
            [
                'url' => 'gallery7.jpg',
                'namePhoto' => 'Wedding Ceremony',
                'categallerie_id'=> 4
            ],
            [
                'url' => 'gallery8.jpg',
                'namePhoto' => 'Beach',
                'categallerie_id'=> 1
            ],
            [
                'url' => 'gallery9.jpg',
                'namePhoto' => 'Honeymoon Room',
                'categallerie_id'=> 3
            ],
            [
                'url' => 'gallery10.jpg',
                'namePhoto' => 'Sea',
                'categallerie_id'=> 2
            ],
        ]);
    }
}
