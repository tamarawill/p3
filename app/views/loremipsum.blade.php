@extends('_master')

@section('title')
	Dummy Text Generator
@stop

@section('content')

    <h2>Make some more text:</h2>

    {{ Form::open(array('url' => '/loremipsum')) }}
        {{ Form::label('qty', 'Number of Paragraphs to Generate') }}
        {{ Form::text('qty', '5') }}
        {{ Form::submit('Make Text') }}
    {{ Form::close() }}

    @if ($outofrangeerr == TRUE)
        <p><strong>Your number was too high, too low, or not a number. Enter a whole number between 1 and 50.</strong></p>
    @else

        <h2>Here's Some Text:</h2>

        @foreach ($paragraphs as $paragraph)
            <p>{{$paragraph}}</p>
        @endforeach

    @endif

    @section('footer')
        <p>This page users <a href="https://packagist.org/packages/badcow/lorem-ipsum" target="_blank">Badcow's Lorem Ipsum Generator package.</a></p>
    @stop

@stop