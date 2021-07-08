@extends('layouts.app')

@section('content')
<div class="jumbotron-header mx-0 mb-5">
    <div class="gradient-bg">
        <h1 class="text-white">Profile</h1>
    </div>
</div>
<div class="container">
    <h3>{{ $user->name }}'s recent posts</h3>
    <p>Role: {{ $user->role->name }}</p>
    <hr>
    @foreach($user->blogs as $blog)
        <h4><a href="{{ route('blogs.show', [$blog->slug]) }}">{{ $blog->title }}</a></h4>
    @endforeach
</div>
@endsection