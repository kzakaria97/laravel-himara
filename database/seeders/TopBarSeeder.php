<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('top_bars')->insert([            
            [
                'name' => 'Himara hotel bulding Since 1936',
                'phone' => '+000 123 456 789',
                'email' => 'Himara@hotel.com',
            ],
        ]);
    }
}
