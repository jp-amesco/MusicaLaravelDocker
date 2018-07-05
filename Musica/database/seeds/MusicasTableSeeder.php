<?php

use Illuminate\Database\Seeder;
use App\Musica;
use App\Album;

class MusicasTableSeeder extends Seeder{
    public function run(){
        $faker = Faker\Factory::create();
        $album = Album::find(4);
        foreach(range(1, 10) as $i){
            $musica = $album->musicas()->create([
                'nome' => $faker->name,
                'letra' => $faker->text,
            ]);
        }
    }
}