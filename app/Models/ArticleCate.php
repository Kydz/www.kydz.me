<?php

class ArticleCate extends Eloquent {

    public function article(){
        return $this->belongsTo('Article');
    }
}