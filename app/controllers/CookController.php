<?php

class CookController extends BaseController{

    public function write(){
        return View::make('blade.kitchen.write');
    }

    public function save(){
        $content = Input::get('content');
        $articleContent = new ArticleContent();
        $article = new Article();
        $article->id_cate = 1;
        $article->id_member = 2;
        $article->active = 1;
        $article->save();
        $articleContent->content = $content;
        $articleContent->id_article = $article->id;
        $articleContent->id_lang = 1;
        $articleContent->save();
        echo "1";
    }
}