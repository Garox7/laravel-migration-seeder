<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['trenitalia', 'Italo treno', 'Fecciarossa']);
            $train->departure_station = $faker->word(rand(1, 3), true);
            $train->arrival_station = $faker->word(rand(1, 3), true);
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = rand(1, 20);
            $train->number_carriges = rand(1, 20);
            $train->in_time = [true, false][rand(0, 1)];
            $train->deleted = [true, false][rand(0, 1)];
            $train->save();
        }
    }
}
