@extends('kitchen.archive.layout')
@section('main')
<div>
    <form action="/archive/{{$article->id or 0}}" method="POST" enctype="multipart/form-data">
        {!!csrf_field()!!}
        <div class="form-control"><section>Title:</section><input name="title" value="{{$article->title or ''}}" /></div>
        <div class="form-control"><section>Brief:</section><input name="brief" value="{{$article->brief or ''}}" /></div>
        <div class="form-control"><section>Content:</section></div>
        <div class="form-control"><textarea name="content" id="content" cols="100" rows="40">{{$article->content or ''}}</textarea></div>
        <div class="form-control"><section>Set to active:<input type="checkbox" name="active" value="1" 
        @if ($article->active == 1)
            checked="checked" 
        @endif
        /></section></div>
        <div class="form-control"><section><input type="submit" value="Submit" /><input type="button" id="btn-preview" value="preview" /></section></div>
        <input type="hidden" value="1" name="type" />
    </form>
    <dir id="preview"></dir>
</div>
@stop

@section('js')
<script type="text/javascript">
$(document).ready(function () {
    $('#btn-preview').on('click', function () {
        $.ajax({
            url: '/archive/preview',
            method: 'POST',
            data: {content: $('#content').val(), _token: '{{csrf_token()}}'},
            success: function (re) {
                if (re.code == 2000) {
                    $('#preview').html(re.data);
                } else {
                    alert(re.message);
                }
            }
        });
    });
});
</script>
@stop