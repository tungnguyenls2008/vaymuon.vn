<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0;$i<20;$i++){
            DB::table('stories')->insert([
                'name' => $faker->name,
                'avatar'=>$faker->image('public/images/avatar/story',640,480,'people',false),
                'career' => $faker->realText(25),
                'story'=> $faker->realText(),
                'role'=>$faker->numberBetween(1,2)
            ]);
            $i++;
        }
    }
}
