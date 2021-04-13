@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="container">
                <h1>Trashed Blogs</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                @foreach($trashedBlogs as $blog)
                    <h2><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h2>
                {{-- restore --}}
                <div class="d-flex">
                    <form class="mr-2" action="{{ route('blogs.restore', $blog->id) }}" method="get">
                        <button type="submit" class="btn btn-success btn-sm">Restore</button>
                        {{ csrf_field() }}
                    </form>
                    {{-- permanent delete --}}
                    <form action="{{ route('blogs.permanent-delete', $blog->id) }}" method="post">
                    {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger btn-sm">Permanently Delete</button>
                        {{ csrf_field() }}
                    </form>
                </div>
                <p>{{ $blog->body }}</p>
                @endforeach
            </div>
            <div class="col-12 col-md-4">
                <h2>Side Bar</h2>
            </div>
        </div>
    </div>
@endsection
