<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([            
            [
                'title' => 'Himara Since 1936',
                'subTitle' => 'Himara hello hotel welcome...',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae vero magni, provident impedit minima laudantium iste labore velit, vel culpa vitae animi qui placeat, modi magnam doloremque quod reiciendis explicabo fugit sunt fuga consequatur? Modi quis unde dolorum cumque doloremque!',
                'url' => 'favicon-apple.png',
                'etoile' => 5,
                'titleCard' => 'Hotel Himara 1943',
                'textCard' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae vero magni, provident impedit minima'
            ],
        ]);
    }
}
