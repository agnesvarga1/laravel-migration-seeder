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
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i<10; $i++){
            $newTrain = new Train(); //new instance

            $newTrain-> company = $faker->company();
            $newTrain-> departure_station = $faker->city();
            $newTrain-> arrival_station = $faker->city();
            $newTrain-> departure_time = $faker->time();
            $newTrain-> arrival_time = $faker->time();
            $newTrain-> train_code = $faker->bothify("?????");
            $newTrain-> total_carriage = $faker->numberBetween(1,30);
            $newTrain-> on_time = $faker->randomElement([true,false]);
            $newTrain-> cancelled = $faker->randomElement([true,false]);

            $newTrain->save();

        }
    }
}
