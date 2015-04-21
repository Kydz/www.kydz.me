<?php

class Article extends Eloquent {

    public function articleContents(){
        return $this->hasMany('ArticleContent');
    }

    public function articleCate(){
        return $this->hasOne('articleCate');
    }
}
