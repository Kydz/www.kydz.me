@extends('layouts.master')

@section('seo')
<title>Let`s cook</title>
@stop

@section('body')
<div id="wrapper">
    <header>
        <h1>Kitchen</h1>
        <nav>
            <ul>
                <li><a href="/archive/new">New</a></li>
            </ul>
        </nav>
    </header>
    <div id="main">
        @section('main')
        @show
    </div>
    <footer>
    </footer>
</div>
@stop

@section('js')
<script src="http://gosspublic.alicdn.com/aliyun-oss-sdk-4.3.0.min.js"></script>
<script type="text/javascript">
  var client = new OSS.Wrapper({
    region: '<oss region>',
    accessKeyId: '<Your accessKeyId>',
    accessKeySecret: '<Your accessKeySecret>',
    bucket: '<Your bucket name>'
  });
  client.list({
    'max-keys': 10
  }).then(function (result) {
    console.log(result);
  }).catch(function (err) {
    console.log(err);
  });
</script>
@stop