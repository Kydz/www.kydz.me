<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Archive</title>
{{ HTML::style('css/style.css') }}
{{ HTML::style('css/archive.css') }}
</head>
<body>
<div id="wrapper">
    <header>
        <h1>ARCHIVE</h1>
        <nav>
            @yield('navigation')
        </nav>
    </header>
    <div id="main">
        @section('body')
        @show
    </div>
    <footer>
    </footer>
</div>
</body>
</html>