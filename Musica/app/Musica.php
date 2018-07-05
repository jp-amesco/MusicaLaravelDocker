<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    protected $fillable = ['estilo_id','nome','letra'];

    public function albums(){
        return $this-> belongsToMany('App\Album');
    }

    public function users(){
        return $this-> belongsToMany('App\User');
    }

    public function bandas(){
        return $this->belongsToMany('App\Banda');
    }
}
