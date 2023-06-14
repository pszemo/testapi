<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create('pl_PL');
        for ($i = 0; $i < 150; $i++) {
            Cat::create([
                'name' => $faker->firstName('male'|'female'),
                'age' => $faker->numberBetween(1,15),
                'color' => $faker->safeColorName,
                'office_id' => rand(1,10),
                'ready_to_adopt' => $faker->boolean,

            ]);
        }
    }
}
