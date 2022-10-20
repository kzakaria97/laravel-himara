<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([            
            [
                'url' => 'slider1.jpg',
                'star' => 5,
                'hotelname' => 'Star Luxury Hotel',
                'title' => 'TOUCH THE DREAM',
                'subtitle' => 'Live Your Myth In Hotel Himara',
                'btnfirst' => 'BOOK A ROM NOW',
                'btnsecond' => 'CONTACT US NOW',
            ],
            [
                'url' => 'slider2.jpg',
                'star' => 0,
                'hotelname' => 'Star Luxury Hotel',
                'title' => 'TOUCH THE DREAM',
                'subtitle' => 'Live Your Myth In Hotel Himara',
                'btnfirst' => 'BOOK A ROM NOW',
                'btnsecond' => 'CONTACT US NOW',
            ],
            [
                'url' => 'slider3.jpg',
                'star' => 0,
                'hotelname' => '',
                'title' => 'TOUCH THE DREAM',
                'subtitle' => 'Live Your Myth In Hotel Himara',
                'btnfirst' => '',
                'btnsecond' => '',
            ],
        ]);
    }
}
