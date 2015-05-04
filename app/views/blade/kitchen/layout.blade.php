<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Let`s cook</title>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
{{ HTML::style('css/style.css') }}
{{ HTML::style('css/form.css') }}
{{ HTML::script('addons/kindeditor/kindeditor.js') }}
{{ HTML::script('addons/kindeditor/lang/zh_CN.js') }}
</head>
<body>
<div id="wrapper">
    <header>
        <h1>Kitchen</h1>
        <nav>
            <ul>
                <li>Fresh MEAT</li>
            </ul>
        </nav>
    </header>
    <div id="main">
        @section('body')
        @show
    </div>
    <footer>
    </footer>
    @section('js')
    @show
</div>
</body>
</html>