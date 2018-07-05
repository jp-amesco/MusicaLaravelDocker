@extends('layouts.app')

@section('content')
    <div class="container col-4">{{$musica->letra}}>
        {{ Form::open(['url' => 'favorito/'. Auth::user()->id . '/' . $musica->id])}}
            {{ Form::submit('Adicionar aos favoritos', ['class' => 'btn btn-primary'])}}
        {{ Form::close() }}
    </div
@endsection