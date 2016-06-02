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