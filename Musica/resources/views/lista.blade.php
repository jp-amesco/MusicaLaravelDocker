@extends('layouts.app')

@section('content')
    <div class="container col-6 list-group text-center">
        @foreach($bandas as $banda)
            <a class="list-group-item list-group-item-action list-group-item-dark" href="{{url ('banda/'.$banda->slug)}}">{{$banda->nome}}</a>
        @endforeach
    </div>
@endsection