<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('drinks')->insert([
           'name' =>  $faker->name,
            'description' => $faker->words($faker->numberBetween(1, 3), true),
            'ingredients' => $faker->words($faker->numberBetween(1, 2), true),
            'recipe' => $faker->words($faker->numberBetween(1, 2), true),
        ]);
    }
}
