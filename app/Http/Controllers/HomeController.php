<?php
namespace App\Http\Controllers;

use App\Providers\View;

class HomeController
{
	public function show()
	{
		return View::display('home.php');
	}
}
