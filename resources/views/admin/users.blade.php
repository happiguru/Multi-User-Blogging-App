@extends('layouts.app')

@include('partials.meta_static')

@section('content')
<div class="jumbotron-header mx-0 mb-4">
    <div class="gradient-bg">
        <h1 class="text-white">All Users</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-2">
            @include('partials.sidebar')
        </div>
        <div class="col-12 col-md-7 d-flex">
            @foreach($users as $user)
                <div class="col-md-4">
                    <form action="{{ route('users.update', $user->id) }}" method="post" class="">
                        {{ method_field('patch') }}
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <select class="form-controled select" name="role_id">
                                <option selected>{{ $user->role->name }}</option>
                                <option value="2">Author</option>
                                <option value="3">Subscriber</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $user->created_at->diffForHumans() }}" disabled>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-left btn-sm col-md-12">Update</button>
                        </div>
                        {{ csrf_field() }}
                    </form>
                
                    <form action="{{ route('users.destroy', $user) }}" method="post">
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger pull-right btn-sm col-md-12 ">Delete</button>
                        {{ csrf_field() }}
                    </form>
                    </div>
                @endforeach
            </div>
        <div class="col-12 col-md-3">
            <h2>Recent Posts</h2>
            <hr>
            <div>
               
            </div>
        </div>
    
    </div>
</div>
@endsection
