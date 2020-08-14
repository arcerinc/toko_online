<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('hello/world', ['data' => 'hello word juga']);

		// echo "hello word";
	}

	public function coba()
	{
		echo "hello word";
	}


	//--------------------------------------------------------------------

}
