<?php

class Article extends Eloquent {

    public function contents(){
        return $this->hasMany('ArticleContent');
    }

    public function articleCate(){
        return $this->hasOne('articleCate');
    }
}
