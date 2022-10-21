<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([            
            [
                'element' => 'HOME',
                'photonav_id' => 1,
            ],
            [
                'element' => 'ROOM',
                'photonav_id' => 1,
            ],
            [
                'element' => 'TEAM',
                'photonav_id' => 1,
            ],
            [
                'element' => 'GALLERY',
                'photonav_id' => 1,
            ],
            [
                'element' => 'BLOG',
                'photonav_id' => 1,
            ],
            [
                'element' => 'CONTACT US',
                'photonav_id' => 1,
            ],
        ]);
    }
}
