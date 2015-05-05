@extends('blade.master')

@section('head')
{{ HTML::style('css/archive.css') }}
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