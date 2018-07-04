<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musica;
use App\Album;

class MusicaController extends Controller
{
    public function index($banda, $slug, $id){
        $musica = Musica::find($id);
        return view ('letraMusica', compact(['musica']));
    }
}
