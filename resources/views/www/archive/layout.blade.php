@extends('layouts.master')

@section('head-css')
<link rel="stylesheet" type="text/css" href="/css/archive.css" />
<link rel="stylesheet" href="/css/highlight-style.css">
@stop

@section('body')
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
        @section('main')
        @show
    </div>
    <footer>
    </footer>
</div>
@stop

@section('js')
<script type="text/javascript" src="/js/archive.js" ></script>
<script type="text/javascript" src="/js/highlight.pack.js" ></script>
<script>hljs.initHighlightingOnLoad();</script>
@stop