<?php

class MiscFileController extends BaseController {


	public function getCSS($path){
		$path = dirname(__FILE__).'\..\views\css\\'.$path;
		$contents = File::get($path);
		$response = Response::make($contents, 200);
		$response->header('Content-Type', 'text/css');
		return $response;
	}

	public function getJS($path){
		$path = dirname(__FILE__).'\..\views\css\\'.$path;
		$contents = File::get($path);
		$response = Response::make($contents, 200);
		$response->header('Content-Type', 'text/javascript');
		return $response;		
	}
}