<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomcategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomcategories')->insert([       
            [
                'name' => 'Single Room'
            ],
            [
                'name' => 'Double Room'
            ],  
            [
                'name' => 'Family Room'
            ],
            [
                'name' => 'Deluxe Room'
            ],
        ]);
    }
}
