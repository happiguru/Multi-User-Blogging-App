@extends('layouts.app')

@include('partials.meta_static')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <header>
                <h2 class="">Manage Blogs</h2>
                <hr>
            </header>
            <div class="row">
                <section class="col-12 col-md-6">
                    <h5>Published</h5>
                    <article class="border">
                        @foreach($publishedBlogs as $blog)
                            <h2 class="px-2"><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h2>
                            <p class="px-2"> {!! str_limit($blog->body, 100) !!} </p>

                            <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                                {{ method_field('patch') }}
                                    <input name="status" type="checkbox" value="0" style="display:none;" checked>
                                    <button type="submit" class="btn btn-danger btn-sm">Unpublished</button>
                                {{ csrf_field() }}
                            </form>
                        @endforeach
                    </article>
                </section>
                <section class="col-12 col-md-6">
                    <h5>Draft</h5>
                    <article class="border">
                        @foreach($draftBlogs as $blog)
                            <h2 class="px-2"><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h2>
                            <p class="px-2"> {!! str_limit($blog->body, 100) !!} </p>

                            <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                                {{ method_field('patch') }}
                                    <input name="status" type="checkbox" value="1" style="display: none;" checked>
                                    <button type="submit" class="btn-success btn-sm">Publish</button>
                                {{ csrf_field() }}
                            </form>
                        @endforeach
                    </article>
                </section>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <h2>Recent Posts</h2>
            <hr>
            <div>
               
            </div>
        </div>
    
    </div>
</div>
@endsection
