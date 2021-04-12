@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1>{{ $blog->title }}</h1><span><a href="{{ route('blogs.edit', $blog->id) }}">Edit post</a></span>
            </div>
            <div class="col-md-12">
                <p>{{ $blog->body }}</p>
            </div>
        </article>
    </div>

@endsection