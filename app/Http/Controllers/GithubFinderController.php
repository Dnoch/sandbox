<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GithubFinderController extends Controller
{
	public function index()
	{
		return view('githubfinder.index');
    }
}
