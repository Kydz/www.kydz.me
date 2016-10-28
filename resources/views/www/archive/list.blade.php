@extends('www.archive.layout')

@section('content')
<div class="row">
    @foreach ($list as $key => $article)
    <div class="col-sm-6 col-md-6 list-item">
        <a href="{{ url('archive', [$article->id]) }}">
            <div class="thumbnail">
                <div class="brief">
                @if (!empty($article->cover_img))
                    <img src="avatar.jpg" alt="...">
                @else
                    <p>{{ $article->brief }}</p>
                @endif
                </div>
                <div class="title">
                    <h3>{{ $article->title }}</h3>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@stop
