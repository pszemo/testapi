<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Office::truncate();
        $faker = \Faker\Factory::create('pl_PL');
        for ($i = 0; $i < 10; $i++) {
            Office::create([
                'name' => $faker->company,
                'address' => $faker->address,
                'description' => $faker->text,

            ]);
        }
    }
}
