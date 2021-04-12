@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1>{{ $blog->title }}</h1>
                <div class="d-flex">
                @guest

                @else
                    <span class="mr-2"><a class="btn btn-primary btn-sm" href="{{ route('blogs.edit', $blog->id) }}">Edit post</a></span>
                    <span>
                        <form action="{{ route('blogs.delete', $blog->id) }}" method="post">
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            {{ csrf_field() }}
                        </form>
                    </span>
                @endguest
                </div>
            </div>
            <div class="col-md-12">
                <p>{{ $blog->body }}</p>
            </div>
        </article>
    </div>

@endsection