<?php

class MiscFileController extends BaseController {


    public function getCSS($path){
        $path = dirname(__FILE__).'/../views/css/'.$path;
        $contents = File::get($path);
        $response = Response::make($contents, 200);
        $response->header('Content-Type', 'text/css');
        return $response;
    }

    public function getJS($path){
        $path = dirname(__FILE__).'/../views/js/'.$path;
        $contents = File::get($path);
        $response = Response::make($contents, 200);
        $response->header('Content-Type', 'text/javascript');
        return $response;
    }

    public function getAddOn($path){
        $path = dirname(__FILE__).'/../addons/'.$path;
        $ext = File::extension($path);
        $type = 'text/html';
        switch ($ext) {
            case 'css':
                $type = 'text/css';
                break;
            case 'js':
                $type = 'text/javascript';
                break;
            case 'png':
                $type = 'image/png';
                break;
            
            default:
                # code...
                break;
        }
        $contents = File::get($path);
        $response = Response::make($contents, 200);
        $response->header('Content-Type', $type);
        return $response;
    }
}