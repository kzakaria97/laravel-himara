<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceheaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serviceheaders')->insert([            
            [
                'title' => 'HIMARA. SERVICES',
                'subtitle' => 'CHECK OUT OUR AWESOME SERVICES',
            ]
        ]);
    }
}
