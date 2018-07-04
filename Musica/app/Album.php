<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['banda_id','nome', 'slug'];

    public function bandas(){
        return $this->belongsTo('App\Banda');
    }

    public function musicas(){
        return $this->belongsToMany('App\Musica');
    }

    //public function estilos(){
      //  return $this-> belongsTo('App\Estilo');
   // }
}
