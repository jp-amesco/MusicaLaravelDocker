<?php

use Illuminate\Database\Seeder;
use App\Album;

class AlbumsTableSeeder extends Seeder{
    public function run(){
        foreach(range(1, 10) as $i){
            Album::create([
                'banda_id' => 1,
                'nome' => 'Come black',
                'slug' => 'come-black'
            ]);
        }
    }
}