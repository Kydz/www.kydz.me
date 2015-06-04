@extends('blade.archive.layout')

@section('seo')
<title>@if($article->content != null){{$article->title}} |@endif Kydz`s Archive</title>
<meta name="description" content="{{$article->brief}}" />
@stop

@section('main')
<div class="archive_article archive">
    <header>{{$article->title}}</header>
    <footer><span>{{$article->created_at}}</span><span>{{$article->hit}}</span><span class="like"></span></footer>
    <section>
        {{$article->content}}
    </section>
    <footer>
        <span>{{$article->updated_at}}</span><span class="like"></span>
    </footer>
</div>
@stop