<?php

namespace App\Http\Controllers\kitchen;

use GrahamCampbell\Markdown\Facades\Markdown as Markdown;
use Illuminate\Http\Request;

class ArchiveController extends BaseController{
    
    /**
     * articles list page
     * @author Kydz 2015-05-27
     * @return n/a render page
     */
    public function displayList(){
        $articles = \App\Models\Article::orderBy('created_at', 'desc')->paginate(30);
        return view('kitchen.archive.list')->with('articles', $articles);
    }

    public function displayArticle(Request $req, $id = 0)
    {
        try {
            if ($id > 0) {
                $article = \App\Models\Article::find($id);
            } else {
                $article = new \App\Models\Article();
            }
        } catch (Exception $e) {
            
        }
        return view('kitchen.archive.detail')->with(['article' => $article]);
    }

    public function postArticle(Request $req, $id = 0)
    {
        try {
            if ($id > 0) {
                $article = \App\Models\Article::find($id);
                $article->fill($req->all());
            } else {
                $article = new \App\Models\Article($req->all());
            }
            $article->save();
        } catch (Exception $e) {
        }
        return redirect('/archive');
    }

    public function postPreview(Request $req)
    {
        $content = $req->get('content', '');
        try {
            $data = Markdown::convertToHtml($content);
            return response()->json(['data' => $data, 'code' => 2000]);
        } catch (Exception $e) {
            return response()->json(['code' => 2001, 'message' => $e->getMessage()]);
        }
    }

    /**
     * start a new article
     * @author Kydz 2015-05-27
     * @param  article id $id id
     * @return n/a      reder page
     */
    public function write($id = 0){
        if($id > 0){
            $article = \App\Models\Article::find($id);
        }else{
            $article = null;
        }
        return view('blade.kitchen.write')->with('article', $article);
    }


    /**
     * save new article or update an exist one
     * @author Kydz 2015-05-27
     * @param  article id $id id
     * @return n/a      redirect to items list page
     */
    public function save($id=0){
        $pass = Input::get('pass');
        if($pass != Config::get('app.cookPass')){
            echo 0;
            exit();
        }
        $content = Input::get('content');
        $title = Input::get('title');
        $brief = Input::get('brief', $content);
        $active = Input::get('active', 0);
        $brief = mb_substr(strip_tags($brief), 0, 252, 'utf-8');
        if(strlen($brief) >= 252){
            $brief .= '...';
        }
        if($id > 0){
            //save updates
            $articleObj = \App\Models\Article::find($id);
            $articleObj->active = $active;
            $articleObj->content = $content;
            $articleObj->title = $title;
            $articleObj->brief = $brief;
            $articleObj->touch();
            $re = $articleObj->save();
        }else{
            $articleObj = new Article();
            $articleObj->article_cate_id = 1;
            $articleObj->member_id = 2;
            $articleObj->active = $active;
            $articleObj->hit = 0;
            $articleObj->content = $content;
            $articleObj->title = $title;
            $articleObj->brief = $brief;
            $articleObj->touch();
            $re = $articleObj->save();
        }
        if($re) {
            return Redirect::to('cook/items');
        } else echo "0";
    }
}