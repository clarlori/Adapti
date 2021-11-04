


@extends('template')

@section('content')
<a href="blog"> Ir pra a home</a>
<h1> Blog Admin </h1>


<td><a href="{{ route('admim.posts.create') }}">Create new post</a></td>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
    </tr>


    @foreach($posts as $post)

    <tr>
        <td>{{$post->id }} <P> </td> 
        <td>{{$post->title}} <P></td>
        <td><a href="{{ route('admim.posts.edit', $post->id) }}">edit</a><P> </td>
        <td><a href="{{ route('admim.posts.destroy', $post->id) }}">delete</a><P> </td>

        
        
    </tr>
    
    
    @endforeach
    
</table>

    {!!$posts->render()!!}
    
    


@endsection






    






