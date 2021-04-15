@extends('layouts.app')

@section('content')

@include('partials.meta_static')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            @foreach($blogs as $blog)
                <h2><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h2>
                {!! $blog->body !!}
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
