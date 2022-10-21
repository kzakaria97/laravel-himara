<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategorieGallerie;
use App\Models\Photonav;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            User::class,
            AboutSeeder::class,
            TopBarSeeder::class,
            RestaurantSeeder::class,
            VideoSeeder::class,
            CategallerieSeeder::class,
            GallerieSeeder::class,
            SliderSeeder::class,
            ServiceSeeder::class,
            ServiceheaderSeeder::class,
            PhotonavSeeder::class,
            NavbarSeeder::class,
            TeamSeeder::class,
            TagSeeder::class,
            RoomcategorieSeeder::class,
            RoomserviceSeeder::class,
        ]);
    }
}
