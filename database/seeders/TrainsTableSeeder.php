<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++){
            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->words(3, true);
            $train->arrival_station = $faker->words(3, true);
            $train->departures_schedule = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrivals_schedule = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->train_code = $faker->numberBetween(9000, 9999);
            $train->coaches_nr = $faker->numberBetween(3, 9);
            $train->on_schedule = $faker->numberBetween(0, 1);
            $train->canceled = $faker->numberBetween(0, 1);
            $train->save();
        }


    }
}
