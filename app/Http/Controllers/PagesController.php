<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function googleMaps()
	{
		return view('google-maps');
    }
	
	public function randomNumberGenerator()
	{
		return view('numberGuesser');
    }
	
	public function es6()
	{
		return view('es6');
    }
}
