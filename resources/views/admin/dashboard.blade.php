@extends('layouts.app')

@section('content')
<div class="jumbotron-header mx-0 mb-4">
    <div class="gradient-bg">
        @if(Auth::user() && Auth::user()->role_id === 1)
                <h1 class="text-white">Admin Dashboard</h1>
            @elseif(Auth::user() && Auth::user()->role_id === 2)
                <h1 class="text-white">Author Dashboard</h1>
            @elseif(Auth::user() && Auth::user()->role_id === 3)
                <h1 class="text-white">Subscriber Dashboard</h1>
        @endif
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="row">
                <aside class="col-12 col-md-3">
                    <div class="d-flex flex-column">
                        @if(Auth::user() && Auth::user()->role_id === 1)
                            <button class="btn btn-info btn-medium my-2">
                                <a href="{{ route('admin.blogs') }}" class="text-light">Manage Posts</a>
                            </button>
                            <button class="btn btn-info btn-medium my-2">
                                <a href="{{ route('categories.index') }}" class="text-light">View All Category</a>
                            </button>
                            <button class="btn btn-info btn-medium mb-2">
                                <a href="{{ route('categories.create') }}" class="text-light">Create Category</a>
                            </button>
                            <button class="btn btn-primary btn-medium mb-2">
                                <a href="{{ route('blogs.create') }}" class="text-light">Create Post</a>
                            </button>

                            <button class="btn btn-danger btn-medium mb-2">
                                <a href="{{ route('blogs.trash') }}" class="text-light">Trashed Posts</a>
                            </button>
                            <button class="btn btn-danger btn-medium">
                                <a href="http://localhost:8000/laravel-filemanager" class="text-light">File Manager</a>
                            </button>
                        @elseif(Auth::user() && Auth::user()->role_id === 2)
                            <button class="btn btn-info btn-medium my-2">
                                <a href="{{ route('categories.index') }}" class="text-light">View All Category</a>
                            </button>
                            <button class="btn btn-info btn-medium mb-2">
                                <a href="{{ route('categories.create') }}" class="text-light">Create Category</a>
                            </button>
                            <button class="btn btn-primary btn-medium mb-2">
                                <a href="{{ route('blogs.create') }}" class="text-light">Create Blog</a>
                            </button>
                        @elseif(Auth::user() && Auth::user()->role_id === 3)
                            <button class="btn btn-primary btn-medium mb-2">
                                <a href="{{ route('blogs.create') }}" class="text-light">Create Blog</a>
                            </button>
                        @endif
                      </div>
                </aside>
                <div class="col-12 col-md-9">
                    <h3>Hello</h3>
                </div>
            </div>
            
        </div>
        <div class="col-12 col-md-4 border">
            <h2>Side Bar</h2>
        </div>
    
    </div>
</div>
@endsection