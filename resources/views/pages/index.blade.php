
    @extends('layouts.app')

    @section('content')
    <div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Eveniet assumenda quaerat nam sed et velit ex quos asperiores, 
    voluptate dolore quisquam aut impedit harum deserunt odio quia maxime hic nostrum? 
    </p>

    <p>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
    
    </p>
    </div>

    @endsection