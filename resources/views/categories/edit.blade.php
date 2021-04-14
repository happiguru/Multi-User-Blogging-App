@extends('layouts.app')

@section('content')
    <div class="jumbotron">
                    <div class="container">
                        <h1>Edit Category</h1>
                    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" name="name" id="" class="form-control" value="{{ $category->name }}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-primary" type="submit">Create Category</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4">
                <h2>Side Bar</h2>
            </div>
        </div>
    </div>

@endsection