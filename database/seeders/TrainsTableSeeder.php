<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 20; $i++) {
            $newtrain = new Train();

            $newtrain->company = $faker->company();
            $newtrain->departure = $faker->city();
            $newtrain->arrival = $faker->city();
            $newtrain->departure_time = $faker->dateTimeBetween('-1 month', '+1 month');
            $newtrain->arrival_time = $faker->dateTimeBetween('-1 month', '+1 month');
            $newtrain->train_code = $faker->randomNumber(5, true);
            $newtrain->number_carriages = $faker->randomDigitNotNull();
            $newtrain->is_punctual = $faker->numberBetween(0, 1);
            $newtrain->is_cancelled = $faker->numberBetween(0, 1);

            $newtrain->save();
        }
    }
}
