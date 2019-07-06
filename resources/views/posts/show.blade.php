@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$posts->title}}</h1>
<small>Written on{{$posts->created_at}}  by {{$posts->user->name}}</small>
<hr>
<div>
    {{$posts->body}}
</div>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id==$posts->user_id)
<a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">Edit</a>

{{ Form::open(['action' => ['PostsController@destroy',$posts->id],'method'=>'DELETE','class'=>'float-right']) }}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{{ Form::close() }}
@endif
@endif

    
@endsection