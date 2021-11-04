@extends('template')

@section('title')
    
    Minhas anatocoes

@stop


@section('content')

<h1>anotacoes</h1>
    <ul>
        @foreach($notas as $nota)
            <li> {{$nota}}</l1>
        @endforeach
    
    </ul>
@stop

