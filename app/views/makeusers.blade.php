@extends('_master')

@section('title')
	Test User Generator
@stop

@section('content')

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Make some more users!</h3>
      </div>
      <div class="panel-body">

        {{ Form::open(array('url' => '/makeusers', 'role' => 'form')) }}
            <div class="form-group">
                {{ Form::label('qty', 'Number of Users to Generate (1-100)') }}
                {{ Form::text('qty', '5') }}
            </div>
            {{ Form::submit('Make Users') }}
        {{ Form::close() }}

      </div>
    </div>

    @if ($outofrangeerr == TRUE)
        <p class="bg-danger errorbox">Your number was too high, too low, or not a number. Enter a whole number between 1 and 100.</p>
    @else
        @foreach($users as $user)
            <h2>{{$user['name']}}</h2>
            <p>Email: {{$user['email']}}</p>
            <p>Address: {{$user['address']}}</p>
            <p>Text: {{$user['text']}}</p>
        @endforeach
    @endif

@stop

@section('footer')
    <p>This page users <a href="https://packagist.org/packages/fzaninotto/faker" target="_blank"> fzaninotto's Faker package.</a></p>
@stop
