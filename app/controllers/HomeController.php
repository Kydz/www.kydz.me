<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */
    public function v1(){
        $timeEnd = strtotime('2015-06-07');
        $now = time();
        $remain = $timeEnd - $now;
        $day = ceil($remain/86400);
        if($day == 0){
            $timerStr = 'THAT`S THE DAY';
        }elseif($day > 0){
            $timerStr = $day . 'DAYS';
        }else{
            $timerStr = '';
        }
        return View::make('blade.welcome.v1')->with('timer', $timerStr);
    }
}
