@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="jumbotron">
        <div class="container">
            <h1>Admin Dashboard</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="row">
                <aside class="col-12 col-md-3">
                    <div class="d-flex flex-column">
                        <button class="btn btn-info btn-medium my-2">
                            <a href="{{ route('categories.index') }}" class="text-light">View All Category</a>
                        </button>
                        <button class="btn btn-info btn-medium mb-2">
                            <a href="{{ route('categories.create') }}" class="text-light">Create Category</a>
                        </button>
                        <button class="btn btn-primary btn-medium mb-2">
                            <a href="{{ route('blogs.create') }}" class="text-light">Create Blog</a>
                        </button>

                        <button class="btn btn-danger btn-medium">
                            <a href="{{ route('blogs.trash') }}" class="text-light">Trashed Blog</a>
                        </button>
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