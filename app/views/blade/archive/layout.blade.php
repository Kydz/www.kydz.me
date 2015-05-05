<!doctype html>
<html>
<head>
<meta charset="utf-8">
@section('seo')
@show
{{ HTML::style('css/style.css') }}
{{ HTML::style('css/archive.css') }}
</head>
<body>
<div id="wrapper">
    <header>
        <h1>ARCHIVE</h1>
        <nav>
            <ul>
                <li>分类系统建设中</li>
            </ul>
        </nav>
    </header>
    <div id="main">
        @section('body')
        @show
    </div>
    <footer>
    </footer>
</div>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=45238133" charset="UTF-8"></script>
</body>
</html>