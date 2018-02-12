<?php
//
//namespace App\Http\Controllers;
//
//use App\Api;
//use Facebook\FacebookApp;
//use Illuminate\Http\Request;
//use Facebook\FacebookRequest;
//
//class ApiController extends Controller
//{
////	todo Make this an interactive app
//	//	 	https://stackoverflow.com/questions/17197970/facebook-permanent-page-access-token
//	public function facebookToken()
//	{
//		$fb = new \Facebook\Facebook([
//			'app_id' => '184132875421279',
//			'app_secret' => 'c97e2bfc62ccd60768780e59af6ecdd4',
//			'default_graph_version' => 'v2.10',
////			'default_access_token' => '', // optional
//		]);
//// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
////   $helper = $fb->getRedirectLoginHelper();
////   $helper = $fb->getJavaScriptHelper();
////   $helper = $fb->getCanvasHelper();
////   $helper = $fb->getPageTabHelper();
//		https://graph.facebook.com/v2.10/oauth/access_token?grant_type=fb_exchange_token&client_id=184132875421279&client_secret=c97e2bfc62ccd60768780e59af6ecdd4&fb_exchange_token=EAACnd8ahhl8BAK2xkEysZCCtZAkqYnyAWGbGmLldCKlZCG9sxZBAoLw9jwY2fgBxYBZBIYt5kNeZCSa115UBAVNPZBGXE6ta4TcZC84YMrKVEBQVHLqbdZBTJyaZBcRPCY9EhhY0cgyrkIZBk8FrnYgNTvDD8br1YdUcPLzuYPjENSD8ZAyIU1fCJz15mvkCdJol9c1crL8BzqAieAZDZD
//		https://graph.facebook.com/v2.10/10158200874655447/accounts?access_token=EAACnd8ahhl8BAMoDB4vRBZCjbbaVwoG8lZAW8fxUbc5WJjZAsNzdf2ae0mLvXV1g7hdMfGPJZB9tASZBpAxXPETDEvcgokZCaVfBE1ZBXtTC9p1kFsTQ3sjguMTUeoKQilEZChn89hh8uDMyLm9avCAgzVqPrjGMPJkZD
//		try {
//			// Get the \Facebook\GraphNodes\GraphUser object for the current user.
//			// If you provided a 'default_access_token', the '{access-token}' is optional.
//			$response = $fb->get('/me', 'EAACnd8ahhl8BADZCO2mF2Aaj4yqWIstYxz5cCNEq7lTFhaHgS1ZCnSa64lpTjCii2ZBkFVfvZCGNQKB0Fm9gZCQSHGUxPgBdQTzqb43dr0iGTzQAY8eBzKxZBvx8P99JTPgdv2s9RTmhj6ZAdPMGlS5m7PzQZCyWQNlUDcwrgiZC3v2u9P2yYgunD0MdAnZCT4JIYZD');
//		} catch(\Facebook\Exceptions\FacebookResponseException $e) {
//			// When Graph returns an error
//			echo 'Graph returned an error: ' . $e->getMessage();
//			exit;
//		} catch(\Facebook\Exceptions\FacebookSDKException $e) {
//			// When validation fails or other local issues
//			echo 'Facebook SDK returned an error: ' . $e->getMessage();
//			exit;
//		}
//
//
//		$me = $response->getGraphUser();
//		echo 'Logged in as ' . $me->getName();
//		dd($fb);
//
////		$fb = new FacebookApp('184132875421279','c97e2bfc62ccd60768780e59af6ecdd4');
////		$requestxx = new FacebookRequest($fb, 'EAACEdEose0cBAPBZC7nxy6UKEXPLZB4yp06gptO4aoMBgtfAM8Wb9nZCpcbkh0MHhZCB85fwa980ZAEefZCEx4GZAcbw6jQyJZAZCtqZBxjm7renSQW8yHjgbF5eXnsBOF4e49F2KZBFijll74ZAFNgc7dyGbr3A2tRpdoyg8jvmXZC6smpm5j8ciU0fwLZBJDoGwDAfYRbEQweOdol3hmBKoZAXlPApfkpbn1LD5JOGfnJrLvxlwZDZD',//my user access token
////			'GET', '/{page-id}?fields=access_token', array('ADMINISTER'));
//////		dd($requestxx);
////		$responset = $fb->getClient()->sendRequest($requestxx);
////		dd($responset);
////		$json = json_decode($responset->getBody());
////		$page_access = $json->access_token;
//////posting to page
////		$requesty = new FacebookRequest($fbApp, $page_access, 'POST', '/{page-id}/feed?message=Hello fans YYYYYYYYYYYYYYY');
////		$response = $fb->getClient()->sendRequest($requesty);
////		var_dump($response);
////
////		return view('api.facebook');
//	}
//
//	/**
//	 * Display a listing of the resource.
//	 *
//	 * @return \Illuminate\Http\Response
//	 */
//	public function index()
//	{
//		//
//	}
//
//	/**
//	 * Show the form for creating a new resource.
//	 *
//	 * @return \Illuminate\Http\Response
//	 */
//	public function create()
//	{
//		//
//	}
//
//	/**
//	 * Store a newly created resource in storage.
//	 *
//	 * @param  \Illuminate\Http\Request $request
//	 * @return \Illuminate\Http\Response
//	 */
//	public function store(Request $request)
//	{
//		//
//	}
//
//	/**
//	 * Display the specified resource.
//	 *
//	 * @param  \App\Api $api
//	 * @return \Illuminate\Http\Response
//	 */
//	public function show(Api $api)
//	{
//		//
//	}
//
//	/**
//	 * Show the form for editing the specified resource.
//	 *
//	 * @param  \App\Api $api
//	 * @return \Illuminate\Http\Response
//	 */
//	public function edit(Api $api)
//	{
//		//
//	}
//
//	/**
//	 * Update the specified resource in storage.
//	 *
//	 * @param  \Illuminate\Http\Request $request
//	 * @param  \App\Api $api
//	 * @return \Illuminate\Http\Response
//	 */
//	public function update(Request $request, Api $api)
//	{
//		//
//	}
//
//	/**
//	 * Remove the specified resource from storage.
//	 *
//	 * @param  \App\Api $api
//	 * @return \Illuminate\Http\Response
//	 */
//	public function destroy(Api $api)
//	{
//		//
//	}
//
//	public function acceptData(Request $request)
//	{
//		dd($request);
//	}
//}
