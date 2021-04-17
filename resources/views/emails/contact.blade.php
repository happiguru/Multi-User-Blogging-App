@extends('layouts.app')
@section('content')
<div class="jumbotron-header mx-0 mb-4">
    <div class="gradient-bg">
        <h1 class="text-white">Contact</h1>
    </div>
</div>
<main class="container">
    <div class="container-fluid">

        <div class="col-sm-8 offset-md-2">
            <form action="{{ route('mail.send') }}" method="post">
                @include('partials.error-message')
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" name="subject" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea type="text" name="mail_message" class="form-control">{{ old('mail_message') }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Say Hi!</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>

</main>

@endsection