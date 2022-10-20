<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieGallerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_galleries')->insert([            
            [
                'name' => 'All',
            ],
            [
                'name' => 'RESTAURANT',
            ],
            [
                'name' => 'SWIMMING POOL',
            ],
            [
                'name' => 'SPA',
            ],
            [
                'name' => 'ROOM REVIEW',
            ],
        ]);
    }
}
