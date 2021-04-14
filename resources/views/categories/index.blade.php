@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            @foreach($categories as $category)
                <h2><a href="#">{{ $category->name }}</a></h2>
            @endforeach
        </div>
        <div class="col-12 col-md-4 border">
            <h2>Side Bar</h2>
        </div>
    
    </div>
</div>
@endsection
