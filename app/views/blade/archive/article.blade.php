@extends('blade.archive.layout')

@section('seo')
<title>@if($article->content != null){{$article->content->title}} |@endif Archive</title>
<meta name="description" content="{{$article->content->brief}}" />
@stop

@section('body')
<div class="archive_article archive">
    <header>{{$article->content->title}}</header>
    <footer><span>{{$article->created_at}}</span><span>{{$article->hit}}</span><span class="like"></span></footer>
    <section>
        {{$article->content->content}}
    </section>
    <footer><span>{{$article->updated_at}}</span><span class="like"></span></footer>
</div>
@stop