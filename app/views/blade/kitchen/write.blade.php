@extends('blade.kitchen.layout')
@section('body')
<div>
    <form action="{{Config::get('app.kitchenUrl')}}cook/save/@if($article == null)0 @else{{$article->id}} @endif" method="POST" enctype="multipart/form-data">
        <h3>Title</h3>
        <div>{{Form::text('title', isset($article->content->title)?$article->content->title:'', array('id' => 'title', 'name' => 'title'))}}</div>
        <div>{{Form::textarea('content', isset($article->content->content)?$article->content->content:'', array('id' => 'content', 'name' => 'content'))}}</div>
        <div>{{Form::text('pass', '', array('id' => 'pass', 'name' => 'pass'))}}</div>
        <input type="submit" value="Submit" />
    </form>
</div>
@stop

@section('js')
<script type="text/javascript">
    KindEditor.ready(function(K) {
        window.editor = K.create('#content', {
            items:[
                'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
                'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
                'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
                'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
                'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
                'anchor', 'link', 'unlink', '|', 'about'
                ]
        });
    });
</script>
@stop