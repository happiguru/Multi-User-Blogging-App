@extends('layouts.app')

@section('content')

@include('partials.meta_static')

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            @foreach($blogs as $blog)
                <h2><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h2>
                <p>{{ $blog->body }}</p>
            @endforeach
        </div>
        <div class="col-12 col-md-4 border">
            <h2>Side Bar</h2>
        </div>
    
    </div>
</div>
@endsection
