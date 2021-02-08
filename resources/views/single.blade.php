@extends('layouts.layout')

@section('styles')

@endsection
@section('content')
    <main role="main" class="flex-shrink-0 mb-5 ">
        <div class="container">
            <div class="blog-post">
                <h2 class="blog-post-title">{{$blog->title}}</h2>
                <p class="blog-post-meta">{{$blog->created_at->diffForHumans()}} by <b>{{$blog->author}}</b></p>

                <div>{!! $blog->blog !!}</div>

            </div>
        </div>
    </main>
@endsection

