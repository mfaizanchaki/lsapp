@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to {{$title}}</h1>
        <p>This is a simple Laravel Application with Authentication</p>
        <p><a class="btn btn-primary btn-lg" href="/login">Login</a> <a class="btn btn-success btn-lg" href="/register">Register</a></p>
    </div>
@endsection
