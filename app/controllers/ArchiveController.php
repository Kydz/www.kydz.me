<?php

class ArchiveController extends BaseController{

    public function showList($page = 0){
        //获取栏目分类
        //获取文章列表
        $articles = 
        Article::with(array('articleContents' => function($query){
            $query->where('lang_id', '=', '1');
        }))->paginate(2);
        return View::make('blade.archive.list')->with('articles', $articles);
    }
}