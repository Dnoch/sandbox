<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
	public function show()
	{
		return view('ajax.ajax');
	}
	
	public function show2()
	{
		return view('ajax.restful');
	}
	
	public function show3()
	{
		return view('ajax.easyHttp');
	}
	
	public function show4()
	{
		return view('ajax.easyHttp2');
	}
	
	public function fetch()
	{
		return view('ajax.fetch');
	}
	
	public function async()
	{
		return view('ajax.async');
	}
	
	public function jsonfile1()
	{
		
		$json = '[{"title":"Post One","body":"This is post one"},{"title":"Post Two","body":"This is post two"},{"title":"Post Three","body":"This is post three"}]';
		
		return response()->json($json);
	}
}
