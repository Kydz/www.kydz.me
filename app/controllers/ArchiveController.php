<?phpclass ArchiveController extends BaseController{    public function showList($page = 0){        //get cate        //get list        $articles = Article::with('content')->paginate(10);        return View::make('blade.archive.list')->with('articles', $articles);    }    public function showArticle($id = 0){        //get list        //get article        if($id == 0) return Redirect::to('archive');        $article = Article::with('content')->find($id);        $article->hit ++;        $article->save();        return View::make('blade.archive.article')->with('article', $article);    }}