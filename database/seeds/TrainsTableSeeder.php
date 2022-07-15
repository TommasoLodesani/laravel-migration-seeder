<?php

use Illuminate\Database\Seeder;
use App\Train;
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
        for ($i=0; $i < 100; $i++) {

           $train = new Train();
           $train->azienda = 'Trenitalia';
           $train->stazione_di_partenza = $faker->city();
           $train->stazione_di_arrivo = $faker->city();
           $train->orario_di_partenza = $faker->time();
           $train->orario_di_arrivo = $faker->time();
           $train->codice_treno = rand(1,1000);
           $train->numero_carrozze = rand(1,100);
           $train->in_orario = true;
           $train->cancellato = false;
           $train->save();
        }
    }
}
