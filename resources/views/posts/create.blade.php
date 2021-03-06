@extends('layouts.app')

@section('content')
    <h1>Create a post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}            
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Post Body'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-lg'])}}
    {!! Form::close() !!}
@endsection