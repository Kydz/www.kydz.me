<?phpnamespace App\Http\Controllers\www;use App\Http\Controllers\Controller as Controller;class ArchiveController extends Controller{    /**     * show article list     * @param  integer $page page number     * @return n/a        render page     */    public function displayList($page = 0){        //get cate        //get list        $list = \App\Models\Article::where('active', '=', 1)->orderBy('updated_at', 'desc')->paginate(10);        return view('www.archive.list')->with(['list' => $list]);    }    /**     * show specified article     * @param  integer $id article id     * @return n/a      render page     */    public function displayArticle($id = 0){        //get list        //get article        $article = \App\Models\Article::find($id);        $article->hit ++;        $article->save();        return view('www.archive.article')->with('article', $article);    }}