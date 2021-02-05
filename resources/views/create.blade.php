@extends('layouts.layout')

@section('styles')

@endsection
@section('content')
    <main role="main" class="flex-shrink-0 mb-5 ">
        <div class="container">
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Blog Title">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Author</label>
                    <input type="text" class="form-control" name="author" placeholder="Author">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Blog post</label>
                    <textarea class="form-control" name="blog" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Publish</button>
            </form>
        </div>
    </main>
@endsection

