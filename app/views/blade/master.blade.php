<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
@section('seo')
@show
{{ HTML::style('css/style.css') }}

@section('head')
@show
</head>
<body>
@section('body')
@show

@if(App::environment() == 'on')
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=45238133" charset="UTF-8"></script>
@endif

@section('js')
@show
</body>
</html>