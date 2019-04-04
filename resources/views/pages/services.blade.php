@extends('layouts.app')

@section('content')
        <h1>{{$title}}</h1>
        {{-- <p>This a Services page from AdsBlog</p> --}}
        @if(count($services) > 0)
        <ul>
            @foreach($services as $service)
                <li>{{$service}}</li>
            @endforeach
        @endif
        </ul>

@endsection
