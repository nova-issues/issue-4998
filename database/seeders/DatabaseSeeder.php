<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UserTableSeeder::class);
        
        \App\Models\Building::factory()->create([
            'car_parking' => true,
            'moto_parking' => false,
        ]);

        \App\Models\Building::factory()->create([
            'car_parking' => false,
            'moto_parking' => true,
        ]);

        \App\Models\Building::factory()->create([
            'car_parking' => true,
            'moto_parking' => true,
        ]);
    }
}
