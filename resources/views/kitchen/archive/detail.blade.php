@extends('kitchen.archive.layout')

@section('head-css')
<link rel="stylesheet" type="text/css" href="/css/editor.css">
@stop

@section('main')
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <form>
                <fieldset>
                     <legend>表单项</legend> <label>表签名</label><textarea name="content" id="content" cols="100" rows="40">{{$article->content or ''}}</textarea> <span class="help-block">这里填写帮助信息.</span> <label class="checkbox"><input type="checkbox" /> 勾选同意</label> <button type="submit" class="btn">提交</button>
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
<script type="text/javascript">
$(document).ready(function () {
    var markdown = $('#content').val();
    var editor = new Editor({
        element: $('#content')[0]
    });
    editor.render();
});
</script>
@stop