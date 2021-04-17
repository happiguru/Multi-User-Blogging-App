@extends('layouts.app')

@section('content')
<div class="jumbotron-header mx-0 mb-5">
    <div class="gradient-bg">
        <h1 class="text-white">All Categories</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-2 border">
            @include('partials.sidebar')
        </div>
        <div class="col-12 col-md-7 border">
            @if(Session::has('blog_created_message'))
                <div class="alert alert-success">
                    {{ Session::get('blog_created_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div>
            @endif
            <h2 class="">New blog</h2>
            <hr>
            @foreach($categories as $category)
                <h6><ol><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></ol></h6>
            @endforeach
        </div>
        <div class="col-12 col-md-3 border">
            <h2>Side Bar</h2>
            <hr>
        </div>
    
    </div>
</div>
@endsection
