<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();

            $newTrain->company_name = $faker->words(1, true);
            $newTrain->departure_station = $faker->words(2, true);
            $newTrain->arrival_station = $faker->words(2, true);
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->numberBetween(1, 10000);
            $newTrain->number_of_carriages = $faker->numberBetween(3, 15);
            $newTrain->in_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();

            $newTrain->save();
        };
    }
}
