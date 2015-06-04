@extends('blade.archive.layout')

@section('seo')
<title>Archive</title>
@stop

@section('main')
<div class="archive_list">
    @foreach($articles as $article)
        @if($article->content != null)
            <article class="archive_item">
                <header><a href="{{Config::get('app.url')}}archive/{{$article->id}}.html">{{$article->title}}</a></header>
                <section>{{$article->brief}}</section>
                <footer><span>{{$article->created_at}}</span><span>{{$article->hit}}</span><span class="like"></span></footer>
            </article>
        @endif
    @endforeach
</div>
<div class="pager" >{{$articles->links()}}</div>
@stop