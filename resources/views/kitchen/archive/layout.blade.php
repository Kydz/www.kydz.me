@extends('layouts.master')

@section('seo')
<title>Let`s cook</title>
@stop

@section('head')
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
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