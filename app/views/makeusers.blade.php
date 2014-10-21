@extends('_master')

@section('title')
	Test User Generator
@stop

@section('content')

    <h2>{{$faker->name}}</h2>
    <p>Email: {{$faker->email}}</p>
    <p>Address: {{$faker->address}}</p>
    <p>Text: {{$faker->text}}</p>

    <h2>{{$faker->name}}</h2>
    <p>Email: {{$faker->email}}</p>
    <p>Address: {{$faker->address}}</p>
    <p>Text: {{$faker->text}}</p>

@stop