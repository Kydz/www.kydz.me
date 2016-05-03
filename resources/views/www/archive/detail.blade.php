@extends('www.archive.layout')

@section('meta-seo')
<title>{{$article->title or 'Article'}} | Kydz`s Archive</title>
<meta name="description" content="{{$article->brief or ''}}" />
@stop

@section('main')
<div class="archive_article archive">
    <header>{{$article->title or ''}}</header>
    <footer><span>{{$article->created_at or ''}}</span><span>{{$article->hit or ''}}</span><span class="like"></span></footer>
    <section>
    	@if ($article->type == 1)
    		{!! \Markdown::convertToHtml($article->content) !!}
    	@else
	        {!! $article->content !!}
    	@endif
    </section>
    <footer>
        <span>{{$article->updated_at}}</span><span class="like"></span>
    </footer>
</div>
@stop