@extends('layouts.app')

@section('content')
@include('partials.tinymce')
<div class="jumbotron-header mx-0">
    <div class="gradient-bg">
        <h1 class="text-white">Create</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
            <h2 class="">New blog</h2>
            <hr>
            <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="mytextarea" class="form-control"></textarea>
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
        <div class="col-12 col-md-3">
            <h2>Side Bar</h2>
            <hr>
        </div>
    </div>
</div>
@endsection