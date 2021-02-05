@extends('layouts.layout')

@section('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0 ">
    <div class="container">
        @foreach($blogs as $blog)
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">{{$blog->title}}</h5>
                    <p class="card-subtitle mb-2 text-muted font-small">{{$blog->created_at->diffForHumans()}}</p>

                    <p class="card-text"> {!! Str::limit($blog->blog, 200, $end='...') !!}</p>

                    <p class="card-subtitle mb-3 text-muted font-small">Written by {{$blog->author}}

                    </p>
                    <a href="{{url('show/'.$blog->id)}}" class="btn btn-primary">Read more</a>

                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
