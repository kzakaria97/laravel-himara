<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomservices')->insert([       
            [
                'service' => 'DOUBLE BED'
            ],
            [
                'service' => '80 SQ MT'
            ],  
            [
                'service' => '3 PERSONS'
            ],
            [
                'service' => 'FREE INTERNET'
            ],
            [
                'service' => 'FREE WI-FI'
            ],
            [
                'service' => 'BREAKFAST INCLUDE'
            ],
            [
                'service' => 'PRIVATE BALCONY'
            ],
            [
                'service' => 'FREE NEWSPAPER'
            ],
            [
                'service' => 'FLAT SCREEN TV'
            ],
            [
                'service' => 'FULL AC'
            ],
            [
                'service' => 'BEACH VIEW'
            ],
            [
                'service' => 'ROOM SERVICE'
            ],
        ]);
    }
}
