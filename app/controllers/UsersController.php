<?php

class UsersController extends \BaseController {

	
	public function index()
	{
		$users = User::all();

		//return View::make('/users/index',['users'=>$users]);
		return View::make('users.index',['users'=>$users]);
	}


	public function show($username)
	{
		$user = User::whereUsername($username)->first();
	    return View::make('users.detalle',['user'=>$user]);
	}

	public function create ()
	{
		return View::make('users.create');
	}


	public function store()
	{
		//return Input::all();

		//return Input::get('username');


		$validacion = Validator::make(Input::all(),
						[
							'username' => 'required',
							'password' => 'required'
						]);

		if($validacion -> fails())
		{
			return Redirect::back()->withInput()->withErrors($validacion);
		}

		$user = new User; //El nombre debe ser igual al modelo para poder crear la instancia
		$user -> username = Input::get('username');
		$user -> password = Hash::make(Input::get('password'));
		$user -> save()	;

		//return Redirect::to('/users');
			
		return Redirect::route('users.index');

	

	}
}