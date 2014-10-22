@extends('_master')

@section('title')
	Test User Generator
@stop

@section('content')

    <h2>Make some more users:</h2>

    {{ Form::open(array('url' => '/makeusers')) }}
        {{ Form::label('qty', 'Number of Users to Generate') }}
        {{ Form::text('qty', '5') }}
        {{ Form::submit('Make Users') }}
    {{ Form::close() }}

    @if ($outofrangeerr == TRUE)
        <p><strong>Your number was too high, too low, or not a number. Enter a whole number between 1 and 100.</strong></p>
    @else
        @foreach($users as $user)
            <h2>{{$user['name']}}</h2>
            <p>Email: {{$user['email']}}</p>
            <p>Address: {{$user['address']}}</p>
            <p>Text: {{$user['text']}}</p>
        @endforeach
    @endif

@stop