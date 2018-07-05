<?php

use Illuminate\Database\Seeder;
use App\Album;
use App\Banda;


class AlbumsTableSeeder extends Seeder{
    public function run(){
        $faker = Faker\Factory::create();
        $banda = Banda::find(2);
        foreach(range(1, 2) as $i){
            $album = $banda->albums()->create([
                'nome'=> $faker->name,
                'slug'=> $faker->word
            ]);
        }
    }
}