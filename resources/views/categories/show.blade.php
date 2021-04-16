@extends('layouts.app')

@section('content')
<div class="jumbotron-header mx-0">
    <div class="gradient-bg">
        <div class="d-flex">
            <span class="h1 text-white mr-2">{{ $category->name }}</span>
            @if(Auth::user() && Auth::user()->role_id === 1)
            <span class="mr-2"><a class="btn btn-primary btn-sm" href="{{ route('categories.edit', $category->id) }}">Edit</a></span>
            <span>
            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    {{ csrf_field() }}
                </form>
            </span>
            @endif
        </div>
    </div>
</div>
<div class="container">
    <div class="">
        <div class="row">
            <div class="col-12 col-md-9">
                @foreach($category->blog as $blog)
                    <article class="mb-5">
                        <h2 class="my-3"><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h2>
                        <div class="banner">
                            @if($blog->featured_image)
                                <img class="img-responsive featured_image" src="/images/featured_image/{{ $blog->featured_image ?$blog->featured_image : '' }}" alt="{{ str_limit($blog->title, 50) }}">
                            @endif
                        </div>
                        <p> {!! str_limit($blog->body, 200) !!} </p>
                        <a class="btn btn-md btn-primary text-white ml-auto" href="{{ route('blogs.show', $blog->id) }}">Click to read More...</a>
                    </article>
                <hr class="mb-5">
                @endforeach
            </div>
            <div class="col-12 col-md-3">
                <h2>Recent Posts</h2>
                <hr>
                <div>
                    @foreach($category->blog as $blog)
                        
                        <div class="d-flex mb-4">
                            <div class="col-5">
                                @if($blog->featured_image)
                                <a href="{{ route('blogs.show', $blog->id) }}"><img class="img-responsive blog_featured_image mt-2" height="50px" src="/images/featured_image/{{ $blog->featured_image ?$blog->featured_image : '' }}" alt="{{ str_limit($blog->title, 50) }}"></a>
                                @endif
                            </div>
                            <div class="col-7 recent-post">
                                <a class="recent-post-title" href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection