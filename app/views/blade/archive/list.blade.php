@extends('blade.archive.layout')
@section('body')
<div class="archive_list">
    @foreach($articles as $article)
        @if($article->content != null)
            <article class="archive_itme">
                <header>{{{$article->content->title}}}</header>
                <section>{{{$article->content->brief}}}</section>
                <footer><span>{{{$article->created_at}}}</span><span>{{{$article->hit}}}</span><span></span></footer>
            </article>
        @endif
    @endforeach
</div>
<div class="pager" >{{$articles->links()}}</div>
@stop