<?php

use Illuminate\Database\Seeder;
use App\Banda;
use App\Estilo;

class BandasTableSeeder extends Seeder{
    public function run(){
        $faker = Faker\Factory::create();
        $estilo = Estilo::find(1);
        foreach(range(1, 2) as $i){
            $banda = $estilo->bandas()->create([
                'nome' => $faker->name,
                'integrantes' => $faker->name,
                'slug' => $faker->word
            ]);
        }
    }
}