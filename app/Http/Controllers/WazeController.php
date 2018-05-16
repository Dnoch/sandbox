<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;


class WazeController extends Controller
{
	public function show()
	{
		$filename = str_random(10);
		$image = Browsershot::url('https://www.waze.com/en-GB/livemap?zoom=17&lat=-26.14961&lon=28.09381&from_lat=-26.0467&from_lon=28.05998&to_lat=-26.14961&to_lon=28.09381&at_req=0&at_text=Now')
//			->dismissDialogs()
			->windowSize(1204, 768)
			->emulateMedia('screen')
//			->mobile()
//			->setDelay(5000)
			->dismissDialogs()
			->setOption('args', ['--disable-web-security'])
			->save(storage_path("app/public/$filename.png"));
//			->bodyHtml();
		

		
//		return file_get_contents("https://www.waze.com/en-GB/livemap?zoom=17&lat=-26.14961&lon=28.09381&from_lat=-26.0467&from_lon=28.05998&to_lat=-26.14961&to_lon=28.09381&at_req=0&at_text=Now");
		return view('waze.map', compact('image'));
    }
}
