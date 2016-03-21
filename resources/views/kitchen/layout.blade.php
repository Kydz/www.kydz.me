@extends('blade.master')

@section('seo')
<title>Let`s cook</title>
@stop

@section('head')
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
{{ HTML::style('css/form.css') }}
{{ HTML::script('addons/kindeditor/kindeditor.js') }}
{{ HTML::script('addons/kindeditor/lang/zh_CN.js') }}
@stop

@section('body')
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
        @section('main')
        @show
    </div>
    <footer>
    </footer>
</div>
@stop