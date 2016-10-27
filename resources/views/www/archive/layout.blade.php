@extends('layouts.www')

@section('ceil-css')
<link rel="stylesheet" type="text/css" href="/css/highlight-style.css">
<link rel="stylesheet" type="text/css" href="/css/archive.css">
@stop

@section('room')
<div class="row main">
    <div class="col-md-3 page-left">
        <div class="list-group">
            <a class="list-group-item disabled">TOP 5</a>
            @foreach ($hot as $article)
                <a class="list-group-item" href="{{ url('archive', [$article->id]) }}">
                    <span class="badge">{{ $article->hit }}</span>
                    {{ $article->title }}
                </a>
            @endforeach
        </div>
    </div>
    <div class="col-md-9 col-lg-8 page-middle">
        @section('content')
        @show
    </div>
    {{-- <div class="col-md-0 col-lg-1 page-right">
    </div> --}}
</div>
@stop