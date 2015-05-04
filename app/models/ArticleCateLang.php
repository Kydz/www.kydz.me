<?php

class ArticleCateLang extends Eloquent {
    public function articleCate(){
        return $this->belongsTo('ArticleCate');
    }
}
