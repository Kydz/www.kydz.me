<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
@section('ceil-seo')
@show

<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">
@section('ceil-css')
@show

</head>
<body>
<div class="container-fluid room">
@include('www.common.nav')
@section('room')
@show
</div>

<script type="text/javascript" src="http://tajs.qq.com/stats?sId=45238133" charset="UTF-8"></script>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" charset="UFT-8"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@section('floor-js')
@show
</body>
</html>