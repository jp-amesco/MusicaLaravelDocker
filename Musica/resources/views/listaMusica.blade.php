@extends('layouts.app')

@section('content')
    @foreach($musicas as $musica)
        <li><a href="{{url ('banda/'.$banda .'/' . $slug . '/' . $musica->id)}}">{{$musica->nome}}</a></li>
    @endforeach
@endsection