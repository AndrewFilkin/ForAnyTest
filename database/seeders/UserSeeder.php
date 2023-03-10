<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;
use Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            \DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email(),
                'password' => bcrypt('secret'),

            ]);
        }

    }
}
