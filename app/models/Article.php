<?php

class Article extends Eloquent {

    public $timestamps = false;

    public function articleCate(){
        return $this->hasOne('articleCate');
    }
}
