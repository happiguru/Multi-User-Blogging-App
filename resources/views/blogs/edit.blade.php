@extends('layouts.app')

@section('content')
@include('partials.tinymce')
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="container">
                <h1>Edit blog</h1>
            </div>
        </div>
        <div class="col-md-12">
            <div class="container">
                <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="" class="form-control" value="{{ $blog->title }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Title</label>
                        <textarea name="body" id="mytextarea" class="form-control">{{ $blog->body }}</textarea>
                    </div>
                    <p>Choose Category</p>
                    <div class="form-group form-check form-check-inline">
                       <strong>{{ $blog->category->count() ? 'Used ' : '' }} &nbsp;</strong> 
                        @foreach($blog->category as $category)
                            <input type="checkbox" value="{{ $category->id }}" name="category_id[]" 
                            class="form-check-input" checked>
                            <label for="" class="form-check-label mx-1">{{ $category->name }}</label>
                        @endforeach
                    </div>

                    <div class="form-group form-check form-check-inline">
                        <strong class="text-danger">{{ $filtered->count() ? 'Unused ' : '' }} &nbsp;</strong>
                        @foreach($filtered as $category)
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
                        <button class="btn btn-sm btn-primary" type="submit">Update</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

@endsection