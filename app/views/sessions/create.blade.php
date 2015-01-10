@extends('layouts.master')

@section('contenido')


{{ Form::open(['url' => 'store'])}}

	<div>

		{{Form::label('username', 'Usuario:')}}

		{{Form::text('username')}}

	</div>



	<div>

		{{Form::label('password', 'Password:')}}

		{{Form::password('password')}}

	</div>



	<div>

		{{Form::submit('Acceder')}}


	</div>

{{Form::close()}}


@stop
