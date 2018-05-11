<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
	return view('welcome');
});
Route::get('loan-calculator', 'PagesController@loanCalculator');
Route::get('random-number-calculator', 'PagesController@randomNumberGenerator');
Route::post('accept', 'ApiController@acceptData');
Route::get('phpinfo', function () {
	phpinfo();
});
Route::get('google-maps', 'PagesController@googleMaps');
Route::get('es6', 'PagesController@es6');
Route::get('booklist', 'BookListController@index');
Route::get('ajax', 'AjaxController@show');
Route::any('test', 'SmsController@sendTest');
Route::any('concerta', 'SmsController@concerta');
Route::any('credits', 'SmsController@checkCredits');
