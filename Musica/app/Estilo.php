<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    protected $fillable = ['nome'];

    public function bandas(){
        return $this->hasMany('App\Banda');
    }

    //public function albums(){
     //   return $this->hasMany('App\Album');
    //}

    //public function musicas(){
      //  return $this->hasMany('App\Musica');
    //}
}
