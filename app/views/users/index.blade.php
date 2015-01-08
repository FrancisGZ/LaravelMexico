@extends('layouts.master')

@section('contenido')

	<h1>Todos los usuarios</h1>

			@foreach ($users as $user)

			<ul>	
				<li>
					<!--{{$user->username}}-->
					{{link_to("/users/{$user->username}",$user->username)}}

				</li>
			</ul>

			@endforeach

@stop


