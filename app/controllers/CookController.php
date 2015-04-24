<?php

class CookController extends BaseController{

    public function write($id = 0){
        if($id > 0){
            $article = Article::with('content')->find($id);
        }else{
            $article = null;
        }
        return View::make('blade.kitchen.write')->with('article', $article);
    }

    public function save($id=0){
        $content = Input::get('content');
        $title = Input::get('title');
        if($id > 0){
            //save updates
            $contentObj = Article::find($id)->content;
            $contentObj->content = $content;
            $contentObj->title = $title;
            $contentObj->brief = mb_substr(strip_tags($content), 0, 255, 'utf-8').'...';
            $contentObj->touch();
            $re = $contentObj->save();
        }else{
            $article = new Article();
            $article->cate_id = 1;
            $article->member_id = 2;
            $article->active = 1;
            $article->hit = 0;
            $article->save();
            $articleContent = new ArticleContent();
            $articleContent->content = $content;
            $articleContent->lang_id = 1;
            $articleContent->title = $title;
            $articleContent->brief = mb_substr(strip_tags($content), 0, 255, 'utf-8').'...';
            $re = $article->content()->save($articleContent);
        }
        if($re) {
            return Redirect::to('cook/items');
        } else echo "0";
    }

    public function items(){
        $articles = Article::with('content')->paginate(30);
        return View::make('blade.kitchen.items')->with('articles', $articles);
    }
}