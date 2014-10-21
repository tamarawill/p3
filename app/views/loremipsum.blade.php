@extends('_master')

@section('title')
	Dummy Text Generator
@stop

@section('content')
	@foreach (Elvish::getParagraphs(3) as $paragraph)
		<p>{{$paragraph}}</p>
	@endforeach

@stop