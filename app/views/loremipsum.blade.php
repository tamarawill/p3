@extends('_master')

@section('title')
	Dummy Text Generator
@stop

@section('content')


    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Make some more text!</h3>
      </div>
      <div class="panel-body">

    {{ Form::open(array('url' => '/loremipsum', 'role' => 'form')) }}
        <div class="form-group">
            {{ Form::label('qty', 'Number of Paragraphs to Generate (1-50)') }}
            {{ Form::text('qty', '5') }}
        </div>
        {{ Form::submit('Make Text') }}
    {{ Form::close() }}

      </div>
    </div>

    @if ($outofrangeerr == TRUE)
        <p class="bg-danger errorbox">Your number was too high, too low, or not a number. Enter a whole number between 1 and 50.</p>
    @else

        <h2>Here's Some Text:</h2>

        @foreach ($paragraphs as $paragraph)
            <p>{{$paragraph}}</p>
        @endforeach

    @endif

@stop

@section('footer')
    <p>This page users <a href="https://packagist.org/packages/badcow/lorem-ipsum" target="_blank">Badcow's Lorem Ipsum Generator package.</a></p>
@stop
