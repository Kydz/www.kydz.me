<?php

class CookController extends BaseController{

    public function write(){
        return View::make('blade.kitchen.write');
    }

    public function save(){
        $content = Input::get('content');
        $articleContent = new ArticleContent();
        $article = new Article();
        $article->cate_id = 1;
        $article->member_id = 2;
        $article->active = 1;
        $article->save();
        $articleContent->content = $content;
        $articleContent->article_id = $article->id;
        $articleContent->lang_id = 1;
        $articleContent->save();
        echo "1";
    }
}