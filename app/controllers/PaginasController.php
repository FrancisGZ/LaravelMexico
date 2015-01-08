<?php

class PaginasController extends BaseController {

	

	public function info()
	{
		$nombre='informacion';
		return View::make('info') -> with ('nombre', $nombre);
	}


	public function acerca()
	{
		$nombre='acerca';
		return View::make('info') -> with ('nombre', $nombre);
	}
}