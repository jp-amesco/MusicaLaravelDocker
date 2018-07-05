<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Musica;
use App\Album;
use App\User;


class MusicaController extends Controller
{
    public function index($banda, $slug, $id)
    {
        $musica = Musica::find($id);
        return view ('letraMusica', compact(['musica']));
    }

    public function favorito($id, $idmusica)
    {
        $user = User::find(1);
        $musica = Musica::find($idmusica);
        $user->musicas()->attach($musica);
        dd($user->musicas);
        return redirect ('letraMusica')->with();
    }
}
