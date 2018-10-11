<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherjsController extends Controller
{
	public function index()
	{
		return view('weatherjs.index');
    }
}
