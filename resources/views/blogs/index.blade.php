@extends('layouts.app')

@include('partials.meta_static')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            @foreach($blogs as $blog)
                <article>
                    <h2><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h2>
                    <p> {!! str_limit($blog->body, 1000) !!} </p>
                    <a class="btn btn-md btn-primary text-white" href="{{ route('blogs.show', $blog->id) }}">Click to read More...</a>
                </article>
            @endforeach
        </div>
        <div class="col-12 col-md-3">
            <h2>Recent Posts</h2>
            <hr>
            <div>
                @foreach($blogs as $blog)
                    
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
@endsection
