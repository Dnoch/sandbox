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
Route::get('ajax2', 'AjaxController@show2');
Route::get('ajax3', 'AjaxController@show3');
Route::get('ajax4', 'AjaxController@show4');
Route::get('fetch', 'AjaxController@fetch');
Route::get('async', 'AjaxController@async');
Route::get('jsonfile1', 'AjaxController@jsonfile1');

Route::any('test', 'SmsController@sendTest');
Route::any('concerta', 'SmsController@concerta');
Route::any('credits', 'SmsController@checkCredits');
Route::get('waze', 'WazeController@show');


/**
 * Github Finder
 */
Route::get('github', 'GithubFinderController@index');