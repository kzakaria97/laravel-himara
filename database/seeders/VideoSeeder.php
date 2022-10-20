<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([            
            [
                'name' => 'https://www.youtube.com/watch?v=BDDfopejpwk',
                // 'bgImage' => 'slider1.jpg',
            ],
        ]);
    }
}
