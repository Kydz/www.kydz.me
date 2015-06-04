@extends('blade.kitchen.layout')
@section('main')

<ul>
@foreach($articles as $article)
    <li><a href="{{Config::get('app.kitchenUrl')}}cook/write/{{$article->id}}">@if($article->title != null){{$article->title}}@endif</a></li>
@endforeach
</ul>

@stop