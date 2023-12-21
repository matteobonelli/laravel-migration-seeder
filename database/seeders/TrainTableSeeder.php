<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
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
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->numberBetween(10000, 99999);
            $newTrain->numero_carrozze = $faker->numberBetween(5, 12);
            $newTrain->in_orario = $faker->numberBetween(0, 1);
            $newTrain->cancellato = $faker->boolean();
            $newTrain->data = $faker->dateTimeBetween('-1 day');
            $newTrain->save();

        }
    }
}
