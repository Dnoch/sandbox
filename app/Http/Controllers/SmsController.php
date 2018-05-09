<?php

namespace App\Http\Controllers;

use App\BookList;
use Illuminate\Http\Request;
use App\Services\MyMobileAPI;

class SmsController extends Controller
{
	public function sendTest()
	{
		$test = new MyMobileAPI();
		$bob = $test->sendSms('0762628702', 'Test Message');
		
		return json_encode($bob);
	}
	
	public function checkCredits()
	{
		$test = new MyMobileAPI();
		$bob = $test->checkcredits();
		
		return json_encode($bob);
	}
	
	public function concerta()
	{
		$test = new MyMobileAPI();
		$msg = 'Good morning David. Please remember to take your concerta as soon as you can. Best regards. Lil\' Skynet';
		$test->sendSms('0762628702', $msg);
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('booklist.booklist');
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\BookList $bookList
	 * @return \Illuminate\Http\Response
	 */
	public function show(BookList $bookList)
	{
		//
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\BookList $bookList
	 * @return \Illuminate\Http\Response
	 */
	public function edit(BookList $bookList)
	{
		//
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\BookList $bookList
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, BookList $bookList)
	{
		//
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\BookList $bookList
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(BookList $bookList)
	{
		//
	}
}
