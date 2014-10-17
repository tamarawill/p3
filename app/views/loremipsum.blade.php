@extends('_master')

@section('title')
	Dummy Text Generator
@stop

@section('content')
	<h1>Sample Elvish Words</h1>
	@foreach (Elvish::getWords(10) as $word)
		<p>{{$word}}</p>
	@endforeach

@stop