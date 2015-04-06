<?php

class CookController extends BaseController{

    public function write(){
        return View::make('blade.kitchen.write');
    }
}