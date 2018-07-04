<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musica;
use App\Album;

class AlbumController extends Controller
{
    public function index($banda, $slug){
        $musicas = Album::where('slug', $slug)->first()->musicas()->get();
        return view ('listaMusica', compact(['banda', 'slug', 'musicas'])); 
    }
}
