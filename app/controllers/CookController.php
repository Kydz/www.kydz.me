<?php

class CookController extends BaseController{

    public function write($id = 0){
        return View::make('blade.kitchen.write');
    }

    public function save(){
        $content = Input::get('content');
        $title = Input::get('title');
        $articleContent = new ArticleContent();
        $article = new Article();
        $article->cate_id = 1;
        $article->member_id = 2;
        $article->active = 1;
        $article->hit = 0;
        $article->save();
        $articleContent->content = $content;
        $articleContent->article_id = $article->id;
        $articleContent->lang_id = 1;
        $articleContent->title = $title;
        $articleContent->brief = mb_substr(strip_tags($content), 0, 255, 'utf-8').'...';
        if($articleContent->save()) {
            return Redirect::to('cook/write');
        } else echo "0";
    }

    public function items(){
        $articles = Article::with('content')->paginate(30);
        // var_dump($articles);
        foreach ($articles as $article) {
        }
    }
}