@extends('blade.kitchen.layout')
@section('body')

<ul>
@foreach($articles as $article)
    <li><a href="{{Config::get('app.kitchenUrl')}}cook/write/{{$article->id}}">{{$article->content->title}}</a></li>
@endforeach
</ul>

@stop