<?php
	

// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');





Route::group(array('before' => 'auth'), function()
{

	Route::get('login2','SessionsController@create');

	Route::post('store','SessionsController@store');

});




	/*Route::get('users','UsersController@index');
	Route::get('users/{username}','UsersController@mostrar');*/

	Route::resource('users','UsersController');

/*Route :: get('info','PaginasController@info');

Route :: get('acerca','PaginasController@acerca');




Route::get('usuario', function()
{
	$usuario = User::find(1);
	return $usuario->email;
});






Route::get('/', function()
{
	$nombre = 'Nombre';
	return View::make('hello') -> with ('nombre', $nombre);
});
*/

/*
Route::get('/', function()
{

	/*$user = DB :: table('user')->find(1);
	//dd($user); 
	//error si solo mse regresa $user
	return $user->username;*/

	/*$user = DB:: table('user')->where('username','!=', 'Francis')->get();

	return $user;

});*/


//public
Route::get('/', function()
{

	/*$user = new User;

	$user -> id = '3';
	$user -> username = 'NuevoUsuario';
	$user -> password = Hash::make('12345');
	$user -> save();
	return User::all();
	*/

	/*User :: create([
			'id'	   => 5,
			'username' => 'UsuarioCreate',
			'password' => Hash::make('dssdsds')

		]);

	return User::all();
	*/


	/*$user = User::find(2);
	$user -> username = 'Modificado';
	$user -> save();*/


	/*$user = User::find(2);
	$user -> delete();*/




	//return User::orderBy('username','asc')->take(2)->get();



	
	 return View::make('hello2');

});




/*Route::get('/users', function()
{
	$users = User::all();

	//return View::make('/users/index',['users'=>$users]);
	return View::make('users.index',['users'=>$users]);

});*/


/*Route::get('/users/{username}', function($username)
{
	$user = User::whereUsername($username)->first();

	
	
	return View::make('users.detalle',['user'=>$user]);

});*/



















