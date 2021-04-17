@extends('layouts.app')

@section('content')
<div class="jumbotron-header mx-0 mb-4">
    <div class="gradient-bg">
        @if(Auth::user() && Auth::user()->role_id === 1)
                <h1 class="text-white">Admin Dashboard</h1>
            @elseif(Auth::user() && Auth::user()->role_id === 2)
                <h1 class="text-white">Author Dashboard</h1>
            @elseif(Auth::user() && Auth::user()->role_id === 3)
                <h1 class="text-white">Subscriber Dashboard</h1>
        @endif
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="row">
                <aside class="col-12 col-md-3">
                    @include('partials.sidebar')
                </aside>
                <div class="col-12 col-md-9">
                    <h3>Hello</h3>
                </div>
            </div>
            
        </div>
        <div class="col-12 col-md-4 border">
            <h2>Side Bar</h2>
        </div>
    
    </div>
</div>
@endsection