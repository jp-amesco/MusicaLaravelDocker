@extends('layouts.app')

@section('content')
    <div class="container col-6 text-center list-group">
        @foreach($albuns as $album)
            <a class="list-group-item list-group-item-action list-group-item-dark" href="{{url ('banda/'.$banda .'/' . $album->slug)}}">{{$album->nome}}</a>
        @endforeach
    </div>
@endsection