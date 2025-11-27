<?php

namespace Database\Seeders;

use App\Models\Conference;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run(): void
    {
        (new Conference())->insert([
            [
               'title' => Lorem::sentence(5),
                'description' => Lorem::text(),
                'date' => now()->addDays(5)->toDateString(),
                'address' => Lorem::sentence(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => Lorem::sentence(6),
                'description' => Lorem::text(),
                'date' => now()->addDays(10)->toDateString(),
                'address' => Lorem::sentence(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => Lorem::sentence(4),
                'description' => Lorem::text(),
                'date' => now()->addDays(15)->toDateString(),
                'address' => Lorem::sentence(3),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
