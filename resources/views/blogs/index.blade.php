@extends('layouts.app')

@include('partials.meta_static')

@section('content')
<div class="jumbotron-header mx-0">
    <div class="gradient-bg">
        <h1 class="text-white">Home</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            @if(Session::has('blog_created_message'))
                <div class="alert alert-success">
                    {{ Session::get('blog_created_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div>
            @endif
            @foreach($blogs as $blog)
                <article class="mb-5">
                    <h2 class="mt-3"><a href="{{ route('blogs.show', [$blog->slug]) }}">{{ $blog->title }}</a></h2>
                    @if($blog->user)
                        Author: <a href="{{ route('users.show', $blog->user->name) }}">{{ $blog->user->name }}</a> Posted: {{ $blog->created_at->diffFOrHumans() }}
                    @endif
                    <hr>
                    <div class="banner">
                        @if($blog->featured_image)
                            <img class="img-responsive featured_image" src="/images/featured_image/{{ $blog->featured_image ?$blog->featured_image : '' }}" alt="{{ str_limit($blog->title, 50) }}">
                        @endif
                    </div>
                    <p> {!! str_limit($blog->body, 200) !!} </p>
                    <a class="btn btn-md btn-primary text-white ml-auto" href="{{ route('blogs.show', $blog->slug) }}">Click to read More...</a>
                </article>
            <hr class="mb-5">
            @endforeach
        </div>
        <div class="col-12 col-md-3">
            @include('partials.right-side-bar')
        </div>
    
    </div>
</div>
@endsection
