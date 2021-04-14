@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <div class="container">
                    <div class="banner border">
                        @if($blog->featured_image)
                            <img class="img-responsive featured_image" src="/images/featured_image/{{ $blog->featured_image ?$blog->featured_image : '' }}" alt="{{ str_limit($blog->title, 50) }}">
                        @endif
                    </div>
                    <h1>{{ $blog->title }}</h1>
                    <p>
                        <strong>Categories: </strong>
                        @foreach($blog->category as $category)
                         <span><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a> |</span>
                        @endforeach
                    </p>
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
            </div>
            <div class="col-md-12">
                <p class="container">{{ $blog->body }}</p>
            </div>
        </article>
    </div>

@endsection