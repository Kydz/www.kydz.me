<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css/homepagev01.css" rel="stylesheet" type="text/css" />
<title>SIMPLE IS GOOD | KYDZ</title>
</head>

<body>
    <div class="main-body">
        <div class="section-top">
            <div class="fixed-bg">
                <span>SIMPLE IS</span>
                <span>GOOD</span>
            </div>
        </div>
        <div class="section-mid">
            <div class="timer">{{$timer}}</div>
            <div class="menu-container">
                 <div><a href="#">{{HTML::linkAction('ArchiveController@showList', 'A', array(''))}}</a></div>
                 <div><a href="#">G</a></div>
                 <div><a href="#">O</a></div>
            </div>
        </div>
        <div class="section-bot"></div>
   </div>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=45238133" charset="UTF-8"></script>
</body>
</html>