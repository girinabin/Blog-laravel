@extends('layouts.app')
@section('content')
<h1>Posts</h1>
@if(count($post1)>=1)
@foreach ($post1 as $post)
<div class="list-group-item">
<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
<small>post on {{$post->created_at}}  by {{$post->user->name}}</small>
<hr>

</div>
    
@endforeach
{{$post1->links()}}
@else
<p>No post found</p>
    
@endif
    
@endsection