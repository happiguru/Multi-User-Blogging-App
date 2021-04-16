@extends('layouts.app')

@section('content')
<div class="jumbotron-header mx-0">
    <div class="gradient-bg">
        <h1 class="text-white">Create Category</h1>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-9">
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
        </div>
    </div>
</div>

@endsection