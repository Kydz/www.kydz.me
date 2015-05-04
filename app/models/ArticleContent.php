<?php

class ArticleContent extends Eloquent {

    protected $touches = array('article');

    public function article(){
        return $this->belongsTo('Article');
    }
}