<?php

class Article extends Eloquent {

    public $timestamps = false;

    public function content(){
        return $this->hasOne('ArticleContent')->where('lang_id', '=', 1);
    }

    public function articleCate(){
        return $this->hasOne('articleCate');
    }
}
