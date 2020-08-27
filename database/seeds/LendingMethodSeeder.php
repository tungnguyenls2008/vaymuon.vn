<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LendingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('lending_methods')->insert([
                'name' => $faker->state,
                'avatar' => $faker->image('public/images/avatar/lender', 640, 480, 'people', false),
                'description' => $faker->realText(30),
            ]);
        }
    }
}
