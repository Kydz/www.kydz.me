@extends('www.archive.layout')

@section('meta-seo')
<title>{{$article->title or 'Article'}} | Kydz`s Archive</title>
<meta name="description" content="{{$article->brief or ''}}" />
@stop

@section('main')
<div>
    <section class="article-head">
        <header>{{$article->title or ''}}</header>
        <footer>
            <span>{{$article->created_at or ''}}</span><span>{{$article->hit or ''}}</span><span class="like"></span>
            <p>"{{$article->brief}}"</p>
        </footer>
    </section>
    <section class="article-body">
        @if ($article->type == 1)
            {!! \Markdown::convertToHtml($article->content) !!}
        @else
            {!! $article->content !!}
        @endif
    </section>
    <section class="article-tail">
        <footer>
            <span>{{$article->updated_at}}</span><span class="like"></span>
        </footer>        
    </section>
</div>
@stop