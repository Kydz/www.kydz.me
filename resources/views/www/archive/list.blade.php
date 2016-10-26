@extends('www.archive.layout')

@section('content')
<div class="row">
    @foreach ($list as $article)
    <div class="col-sm-6 col-md-6 col-lg-4">
        <a href="{{ url('archive', [$article->id]) }}">
            <div class="thumbnail">
                @if (!empty($article->cover_img))
                    <img src="avatar.jpg" alt="...">
                @else
                    <p>{{ $article->brief }}</p>
                @endif
                <div class="caption">
                    <h3>{{ $article->title }}</h3>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@stop
