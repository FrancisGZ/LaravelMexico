@extends('layouts.master')

@section('contenido')

			<h1>Detalle del usuario {{$user->username}}</h1>

			<h2> el id es : {{$user->id}}</h2>

			<h2>Su password es: {{$user->password}}</h2>

@stop