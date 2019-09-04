<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Showmap extends Controller
{
    //

	  public function index()
    {
       // load the view and pass the user
				    return View('showmap.map');
    }
}
