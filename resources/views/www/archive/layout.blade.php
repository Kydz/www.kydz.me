@extends('layouts.master')

@section('head-css')
<link rel="stylesheet" type="text/css" href="/css/archive.css" />
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
@stop