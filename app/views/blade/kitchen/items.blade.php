@extends('blade.kitchen.layout')
@section('body')

<ul>
@foreach($articles as $article)
    <li><a href="{{Config::get('app.kitchenUrl')}}cook/write/{{$article->id}}">@if($article->content->title != null){{$article->content->title}}@endif</a></li>
@endforeach
</ul>

@stop