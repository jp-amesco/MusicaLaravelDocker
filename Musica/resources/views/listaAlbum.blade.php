@extends('layouts.app')

@section('content')
    @foreach($albuns as $album)
        <li><a href="{{url ('banda/'.$banda .'/' . $album->slug)}}">{{$album->nome}}</a></li>
    @endforeach
@endsection