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

    /**
     * proxy of upload file
     * @author Kydz 2015-05-27
     * @return json response from sina app
     */
    public function uploadProxy(){
        $postData['fileContent'] = file_get_contents($_FILES['imgFile']['tmp_name']);
        $postData['fileName'] = $_FILES['imgFile']['name'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, Config::get('app.imghost'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        $error = curl_error($ch);
        if(($end = strpos($response, '<script')) > 0){
            $response = substr($response, 0, $end);
        }
        echo $response;
        exit;
    }
}