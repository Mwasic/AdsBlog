@extends('layouts.app')

@section('content') 
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>
<div>
    {{$post->body}}
</div>
<hr>
<small>{{$post->created_at}}</small>
   
@endsection