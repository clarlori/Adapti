@extends('template')

@section('content')
<h1> Create new Post</h1>

@if($errors->any())

    <ul class="alert">
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
    </ul>

    @endif

{!! Form::open(['route'=>'admim.posts.store',  'method'=>'post']) !!}

@include('admim.posts._form')

<div class="form-group">
    
    {!! Form::label('tags', 'Tags: ', ['class'=>'control-label']) !!}   
    {!! Form::textarea('tags', 'null', ['class'=>'form-control']) !!}

<P></div>



<div class="form-group">
    
    {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
<P></div>


{!! Form::close() !!}


   


@endsection