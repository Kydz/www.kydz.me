<?php

class CookController extends BaseController{

    /**
     * start a new article
     * @author Kydz 2015-05-27
     * @param  article id $id id
     * @return n/a      reder page
     */
    public function write($id = 0){
        if($id > 0){
            $article = Article::with('content')->find($id);
        }else{
            $article = null;
        }
        return View::make('blade.kitchen.write')->with('article', $article);
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
            $articleObj = Article::find($id);
            $articleObj->active = $active;
            $contentObj = $articleObj->content;
            $contentObj->content = $content;
            $contentObj->title = $title;
            $contentObj->brief = $brief;
            $contentObj->touch();
            $re = $contentObj->save() && $articleObj->save();
        }else{
            $article = new Article();
            $article->cate_id = 1;
            $article->member_id = 2;
            $article->active = $active;
            $article->hit = 0;
            $article->save();
            $articleContent = new ArticleContent();
            $articleContent->content = $content;
            $articleContent->lang_id = 1;
            $articleContent->title = $title;
            $articleContent->brief = $brief;
            $re = $article->content()->save($articleContent);
        }
        if($re) {
            return Redirect::to('cook/items');
        } else echo "0";
    }

    /**
     * articles list page
     * @author Kydz 2015-05-27
     * @return n/a render page
     */
    public function items(){
        $articles = Article::with('content')->orderBy('created_at', 'desc')->paginate(30);
        return View::make('blade.kitchen.items')->with('articles', $articles);
    }

    public function cates(){
        
    }

    /**
     * proxy of upload file
     * @author Kydz 2015-05-27
     * @return json response from sina app
     */
    public function uploadProxy(){
        $postData['fileContent'] = file_get_contents($_FILES['imgFile']['tmp_name']);
        $postData['fileName'] = $_FILES['imgFile']['name'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, Config::get('app.imghost'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        $error = curl_error($ch);
        if(($end = strpos($response, '<script')) > 0){
            $response = substr($response, 0, $end);
        }
        echo $response;
        exit;
    }
}