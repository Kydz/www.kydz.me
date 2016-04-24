@extends('www.archive.layout')

@section('seo')
<title>Archive</title>
@stop

@section('main')
<div class="archive_list">
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