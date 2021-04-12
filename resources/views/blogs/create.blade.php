@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Create a new blog</h1>
        </div>
        <div class="col-md-12">
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
                <div class="form-group">
                    <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection