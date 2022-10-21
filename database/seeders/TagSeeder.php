<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([       
            [
                'name' => 'RED'
            ],
            [
                'name' => 'DARK'
            ],
            [
                'name' => 'YELLOW'
            ],   
            [
                'name' => 'BLUE'
            ], 
            [
                'name' => 'BLUE'
            ], 
            [
                'name' => 'PINK'
            ], 
            [
                'name' => 'GREEN'
            ],
            [
                'name' => 'GRAY'
            ],
            [
                'name' => 'BROWN'
            ],   
        ]);
    }
}
