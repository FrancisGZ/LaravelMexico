@extends('layouts.master')

@section('contenido')

	<h1>Alta</h1>

{{ Form::open(['route' => 'users.store']) }}

<div>
	{{ Form::label('username' , 'Escribe el Usuario: ') }}

	{{ Form::text( 'username' )}}

	{{ $errors->first('username')}}
	

</div>

<div>
	{{ Form::label('password' , 'Escribe la contraseña: ') }}

	{{ Form::password( 'password' )}}

	{{ $errors->first('password')}}
</div>

<div>
	{{ Form::submit('Grabar') }}

</div>

{{Form::close()}}

		
@stop


