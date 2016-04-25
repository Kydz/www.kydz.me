@extends('kitchen.archive.layout')
@section('main')
<div>
    <form action="/archive/{{$article->id or 0}}" method="POST" enctype="multipart/form-data">
        <div class="form-control"><section>Title:</section><input name="title" value="{{$article->title or ''}}" /></div>
        <div class="form-control"><section>Brief:</section><input name="brief" value="{{$article->brief or ''}}" /></div>
        <div class="form-control"><section>Content:</section></div>
        <div class="form-control"><textarea name="content">{{$article->content or ''}}</textarea></div>
        <div class="form-control"><section>Set to active:<input type="submit" value="Submit" /></section></div>
    </form>
</div>
@stop