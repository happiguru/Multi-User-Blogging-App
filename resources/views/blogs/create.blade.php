@extends('layouts.app')

@section('content')
    <div class="jumbotron">
                    <div class="container">
                        <h1>Create a new blog</h1>
                    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <form action="{{ route('blogs.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Title</label>
                        <textarea name="body" id="" class="form-control"></textarea>
                    </div>
                    <p>Choose Category</p>
                    <div class="form-group form-check form-check-inline">
                        @foreach($categories as $category)
                            <input type="checkbox" value="{{ $category->id }}" name="category_id[]" 
                            class="form-check-input">
                            <label for="" class="form-check-label mx-1">{{ $category->name }}</label>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label for="featured_image">Featured Image</label><br>
                        <input type="file" name="featured_image">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-md btn-primary" type="submit">Submit Blog</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4">
                <h2>Side Bar</h2>
            </div>
        </div>
    </div>

@endsection