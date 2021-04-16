@extends('layouts.app')

@section('content')
<div class="jumbotron-header mx-0 mb-5">
    <div class="gradient-bg">
        <h1 class="text-white">All Categories</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            @foreach($categories as $category)
                <h2><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></h2>
            @endforeach
        </div>
        <div class="col-12 col-md-4 border">
            <h2>Side Bar</h2>
        </div>
    
    </div>
</div>
@endsection
