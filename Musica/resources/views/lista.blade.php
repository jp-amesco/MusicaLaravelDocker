@extends('layouts.app')

@section('content')
    @foreach($bandas as $banda)
        <li><a href="{{url ('banda/'.$banda->slug)}}">{{$banda->nome}}</a></li>
    @endforeach
@endsection