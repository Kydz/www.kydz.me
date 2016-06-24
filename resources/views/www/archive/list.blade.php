@extends('www.archive.layout')

@section('meta-seo')
<title>Kydz`s Archive</title>
<meta name="description" content="Kydz`s Archive, a personal life recorder" />
@stop

@section('main')
<div class="archive-list article-body">
    @foreach($list as $article)
        @if($article->content != null)
            <article class="archive_item">
                <header><a href="/archive/{{$article->id}}">{{$article->title}}</a></header>
                <section>{{$article->brief}}</section>
                <footer><span>{{$article->created_at}}</span><span>{{$article->hit}}</span><span class="like"></span></footer>
            </article>
        @endif
    @endforeach
</div>
<div class="pager" >{{$list->links()}}</div>
@stop