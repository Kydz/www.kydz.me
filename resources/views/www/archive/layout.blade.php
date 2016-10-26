@extends('layouts.www')

@section('room')
<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item">热门阅读</li>
            @foreach ($hot as $article)
                <a href="{{ url('archive', [$article->id]) }}">
                    <li class="list-group-item">
                        <span class="badge">{{ $article->hit }}</span>
                        {{ $article->title }}
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
    <div class="col-md-9 col-lg-6">
        @section('content')
        @show
    </div>
    <div class="col-lg-3 col-md-0">
    </div>
</div>
@stop