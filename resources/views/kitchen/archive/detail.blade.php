@extends('kitchen.archive.layout')
@section('main')
<div>
    <form action="{{Config::get('app.kitchenUrl')}}cook/save/@if($article == null)0 @else{{$article->id}} @endif" method="POST" enctype="multipart/form-data">
        <div class="form-control"><section>Title:</section>{{Form::text('title', isset($article->title)?$article->title:'', array('id' => 'title', 'name' => 'title'))}}</div>
        <div class="form-control"><section>Brief:</section>{{Form::textarea('brief', isset($article->brief)?$article->brief:'', array('id' => 'brief', 'name' => 'brief'))}}</div>
        <div class="form-control"><section>Pass:</section>{{Form::text('pass', '', array('id' => 'pass', 'name' => 'pass', 'type' => 'password'))}}</div>
        <div class="form-control"><section>Content:</section></div>
        <div class="form-control">{{Form::textarea('content', isset($article->content)?$article->content:'', array('id' => 'content', 'name' => 'content'))}}</div>
        <div class="form-control"><section>Set to active:{{Form::checkbox('active', 1, (isset($article->active)&&$article->active==1)?true:false)}}&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit" /></section></div>
    </form>
</div>
@stop