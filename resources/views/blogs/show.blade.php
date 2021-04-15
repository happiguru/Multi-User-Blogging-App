@extends('layouts.app')

@section('content')

{{-- @include('partials.meta_dynamic') --}}
@section('meta_title') {{ $blog->meta_title }} @endsection
@section('meta_description') {{ $blog->meta_description }} @endsection


    <div class="container">
        <div class="row">
            <article class="col-12 col-md-9">
                <div class="mt-3">
                    <div class="banner">
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
                            <span class="mr-2"><a class="btn btn-primary text-white btn-sm" href="{{ route('blogs.edit', $blog->id) }}">Edit post</a></span>
                            <span>
                                <form action="{{ route('blogs.delete', $blog->id) }}" method="post">
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger text-white btn-sm">Delete</button>
                                    {{ csrf_field() }}
                                </form>
                            </span>
                        @endguest
                    </div>
                    <hr>
                    <p>{!! $blog->body !!}</p>
                </div>
                
            </article>
            <aside class="col-12 col-md-3">
                <h2>Recent Posts</h2>
                <hr>
                <div>
                    
                </div>
            </aside>
        </div>
    </div>
@endsection