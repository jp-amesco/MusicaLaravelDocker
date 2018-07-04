<?php

use Illuminate\Database\Seeder;
use App\Banda;

class BandasTableSeeder extends Seeder{
    public function run(){
        foreach(range(1, 10) as $i){
            Banda::create([
                'estilo_id' => 1,
                'nome' => 'Scorpions',
                'integrantes' => 'klaus mine',
                'slug' => 'scorpions'
            ]);
        }
    }
}