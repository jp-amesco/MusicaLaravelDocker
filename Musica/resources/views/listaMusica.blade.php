@extends('layouts.app')

@section('content')
    <div class="container col-6 list-group text-center">
        @foreach($musicas as $musica)
            <a class="list-group-item list-group-item-action list-group-item-dark" href="{{url ('banda/'.$banda .'/' . $slug . '/' . $musica->id)}}">{{$musica->nome}}</a>
        @endforeach
    </div>
@endsection