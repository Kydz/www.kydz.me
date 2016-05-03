@extends('kitchen.archive.layout')
@section('main')

<ul>
@foreach($articles as $article)
    <li><a href="{{ url('/archive/'.$article->id) }}">{{$article->title or ''}}</a></li>
@endforeach
</ul>

@stop