<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Student;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $classesIds = Classes::pluck('id')->toArray();
        for($i = 0; $i < 10; $i++){
            Student::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->date('Y-m-d', '2010-01-01'),
                'parent_phone' => $faker->numerify('##########'),
                'class_id' => $faker->randomElement($classesIds)
            ]);
        }
    }
}
