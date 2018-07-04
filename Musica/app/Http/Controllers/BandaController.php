<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banda;
use App\Album;

class BandaController extends Controller
{
    public function index(){
        $bandas = Banda::all();
        return view ('lista', compact(['bandas']));
    }

    public function show($banda){
        $albuns = Album::all();
        return view('listaAlbum', compact(['albuns', 'banda']));
    }
}
