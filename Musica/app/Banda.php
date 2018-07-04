<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    protected $fillable = ['estilo_id','nome','integrantes','slug'];

    public function albums(){
        return $this->hasMany('App\Album');
    }

    public function estilos(){
        return $this-> belongsTo('App\Estilo');
    } 

    public function musicas(){
        return $this->belongsToMany('App\Musica');
    }
}
