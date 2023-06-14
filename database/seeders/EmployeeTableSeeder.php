<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('pl_PL');

        for ($i = 0; $i < 20; $i++) {
            Employee::create([
                'first_name' => $faker->firstName('male'|'female'),
                'last_name' => $faker->lastName(),
                'office_id' => rand(1,10),

            ]);
        }
    }
}
