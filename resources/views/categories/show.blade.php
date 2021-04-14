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
                            
                        </span>
                    @endguest
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p class="container"></p>
            </div>
        </article>
    </div>

@endsection