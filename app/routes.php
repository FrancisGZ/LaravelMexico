<?php
	

//Rutas por defecto

Route::get('/', function()
{
	return View::make('hello');


	 
});

// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');





Route::group(array('before' => 'auth'), function()
{



});



		Route::resource('users','UsersController');

		Route::get('users/{username}','UsersController@mostrar');

		Route:: get('info','PaginasController@info');

		Route:: get('info/{nombrePagina}','PaginasController@mostrarPagina');

		Route:: get('acerca','PaginasController@acerca');




	Route::get('usuario', function()
	{
	$usuario = User::find(1);
	return $usuario->username;
	});





Route::get('diferente', function()
{

	/*$user = DB:: table('user')->find(1);
	
	return $user->username;*/

	$user = DB:: table('users')->where('username','!=', 'Francis')->get();

	return $user;

});



Route::get('/crearUsuario', function()
{

	//Forma 1
	$user = new User;
	$user -> username = 'NuevoUsuario';
	$user -> password = Hash::make('12345');
	$user -> save();
	return User::all();
	
//Fprma 2
	User:: create([
			'username' => 'UsuarioCreate',
			'password' => Hash::make('9876')

		]);

	return User::all();
	



	
	 return View::make('hello2');

});



Route::get('/eliminarUsuario', function()
{
	$user = User::find(3);
	$user -> delete();


	 return View::make('hello2');
});


Route::get('/modificarUsuario', function()
{
	$user = User::find(3);
	$user -> username = 'usuarioModificado';
	$user -> save();

	 return View::make('hello2');
});


Route::get('/ordenarUsuarios', function()
{
	//return User::orderBy('username','asc')->take(2)->get();

	return User::orderBy('username','asc')->get();



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



















