@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <div class="container">
                    <h1>{{ $category->name }}</h1>
                    <div class="d-flex">
                    @guest

                    @else
                        <span class="mr-2"><a class="btn btn-primary btn-sm" href="{{ route('categories.edit', $category->id) }}">Edit</a></span>
                        <span>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                {{ csrf_field() }}
                            </form>
                        </span>
                    @endguest
                    </div>
                </div>
            </div>
            <div class="container border">
                <p class="col-md-12">
                    @foreach($category->blog as $blog)
                        <h3 class="my-3"><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h3>
                    @endforeach
                
                </p>
            </div>
        </article>
    </div>

@endsection