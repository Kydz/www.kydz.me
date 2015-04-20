<?php

class CookController extends BaseController{

    public function write(){
        return View::make('blade.kitchen.write');
    }

    public function save(){
        $re = Input::all();
        $article = new Article();
        var_dump($re, $article);
    }
}