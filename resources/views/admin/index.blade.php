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
            <button class="btn btn-primary btn-medium">
                <a href="{{ route('blogs.create') }}" class="text-light">Create Blog</a>
            </button>

            <button class="btn btn-danger btn-medium">
                <a href="{{ route('blogs.trash') }}" class="text-light">Trashed Blog</a>
            </button>
        </div>
        <div class="col-12 col-md-4 border">
            <h2>Side Bar</h2>
        </div>
    
    </div>
</div>
@endsection