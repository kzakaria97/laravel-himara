<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([            
            [
                'poste' => 'HOUSE KEEPER',
                'name' => 'Alex Cox',
                'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
                'url' => 'slider1.jpg',
            ],
            [
                'poste' => 'RECEPTIONIST',
                'name' => 'Henry Garret',
                'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
                'url' => 'slider1.jpg',
            ],
            [
                'poste' => 'CHEF',
                'name' => 'Tommy Alexander',
                'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
                'url' => 'slider1.jpg',
            ],
            [
                'poste' => 'HOTEL MANAGER',
                'name' => 'Penny Soto',
                'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
                'url' => 'slider1.jpg',
            ],[
                'poste' => 'ROOM SERVICE',
                'name' => 'Alex Cox',
                'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
                'url' => 'slider1.jpg',
            ],[
                'poste' => 'HOTEL MANAGER',
                'name' => 'Alfredo Romero',
                'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
                'url' => 'slider1.jpg',
            ],[
                'poste' => 'MARKETING ADVISOR',
                'name' => 'Glenda Gilbert',
                'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
                'url' => 'slider1.jpg',
            ],[
                'poste' => 'HOTEL MANAGER',
                'name' => 'Sheila Carter',
                'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.',
                'url' => 'slider1.jpg',
            ],
        ]);
    }
}
