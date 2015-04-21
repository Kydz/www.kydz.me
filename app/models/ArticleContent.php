<?php

class ArticleContent extends Eloquent {
    public function article(){
        return $this->belongsTo('Article');
    }
}