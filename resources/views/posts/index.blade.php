@extends('template')

@section('content')
<h1> Blog </h1>

<a href="posts"> Ir para Blog Admim</a>

    @foreach($posts as $post)
    <h2> {{$post-> title}} </h2>
    <p> {{$post-> content}} </p>

    <b>Tags:</b><br>
    <ul>
    @foreach($post->tags as $tag)
       
        <li><a>{{$tag->name }}</a></li>
    @endforeach
  </ul>
  
    

    <h3>Comments:</h3>
    @foreach($post->comments as $comment)
    <b>Name: </b> {{ $comment->name}}<br>
    <b>Comentrios: </b> {{$comment->comment}} 
    @endforeach
    
    <hr>
    



    @endforeach
@endsection



