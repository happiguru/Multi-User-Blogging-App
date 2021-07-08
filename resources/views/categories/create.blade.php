@extends('layouts.app')

@section('content')
<div class="jumbotron-header mx-0">
    <div class="gradient-bg">
        <h1 class="text-white">Create Category</h1>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-2">
            <h2>Menu</h2>
            <hr>
            @include('partials.sidebar')
        </div>
        <div class="col-12 col-md-7">
            @if(Session::has('blog_created_message'))
                <div class="alert alert-success">
                    {{ Session::get('blog_created_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div>
            @endif
            <h2>New Category</h2>
            <hr>
            <form action="{{ route('categories.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-primary" type="submit">Create Category</button>
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