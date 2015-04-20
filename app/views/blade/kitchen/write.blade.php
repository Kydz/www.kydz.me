@extends('blade.kitchen.layout')
@section('navigation')
<ul>
    <li>写写写</li>
</ul>
@stop

@section('body')
<div>
    <form action="<?php echo Config::get('app.kitchenUrl')?>cook/save" method="POST" enctype="multipart/form-data">
        <?php echo Form::textarea('content', '', array('id' => 'content', 'name' => 'content'))?>
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