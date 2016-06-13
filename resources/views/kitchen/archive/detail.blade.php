@extends('kitchen.archive.layout')

@section('head-css')
<link rel="stylesheet" type="text/css" href="/css/editor.css">
@stop

@section('main')
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <form action="/archive/{{$article->id or 0}}" method="POST" enctype="multipart/form-data">
                {!!csrf_field()!!}
                <fieldset>
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" class="form-control" value="{{$article->title or ''}}" placeholder="标题" />
                    </div>
                    <div class="form-group">
                        <label>Brief</label>
                        <input name="brief" class="form-control" value="{{$article->brief or ''}}" />
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" id="content">{{$article->content or ''}}</textarea>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox"><input type="checkbox" name="active" value="1" 
                        @if ($article->active == 1)
                            checked="checked" 
                        @endif
                        /> Active?</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>  
                    <input type="hidden" value="1" name="type" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
@stop

@section('js')
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/zepto/1.0/zepto.min.js"></script>
<script type="text/javascript" src="/js/editor.js"></script>
<script type="text/javascript" src="/js/marked.js"></script>
<script src="http://gosspublic.alicdn.com/aliyun-oss-sdk-4.3.0.min.js"></script>
<script type="text/javascript">
// var client = new OSS.Wrapper({
// region: '<oss region>',
// accessKeyId: '<Your accessKeyId>',
// accessKeySecret: '<Your accessKeySecret>',
// bucket: '<Your bucket name>'
// });
// client.list({
// 'max-keys': 10
// }).then(function (result) {
// console.log(result);
// }).catch(function (err) {
// console.log(err);
// });
$(document).ready(function () {
    var markdown = $('#content').val();
    var editor = new Editor({
        element: $('#content')[0]
    });
    editor.render();
});
</script>
@stop