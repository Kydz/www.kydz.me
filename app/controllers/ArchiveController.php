<?php

class ArchiveController extends BaseController{

    public function showList($page = 0){
        //获取栏目分类
        //获取文章列表
        
        return View::make('blade.archive.list');
    }
}