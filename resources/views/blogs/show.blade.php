@extends('layouts.app')

@include('partials.meta_dynamic')

@section('content')
<div class="jumbotron-header mx-0">
    <div class="gradient-bg">
        <h1 class="text-white">Display random quotes</h1>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <article class="col-12 col-md-9">
            @if(Session::has('blog_created_message'))
                <div class="alert alert-success">
                    {{ Session::get('blog_created_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                </div>
            @endif
            <div class="mt-3">
                <h1>{{ $blog->title }}</h1>
                    @if($blog->user)
                        Author: <a href="{{ route('users.show', $blog->user->name) }}">{{ $blog->user->name }}</a> Posted: {{ $blog->created_at->diffFOrHumans() }}
                    @endif
                <p>
                    <strong>Categories: </strong>
                    @foreach($blog->category as $category)
                    <span><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a> |</span>
                    @endforeach
                </p>
                <hr>
                <div class="banner">
                    @if($blog->featured_image)
                        <img class="img-responsive featured_image" src="/images/featured_image/{{ $blog->featured_image ?$blog->featured_image : '' }}" alt="{{ str_limit($blog->title, 50) }}">
                    @endif
                </div>
                @if(Auth::user())
                @if(Auth::user()->role_id === 1 || Auth::user()->role_id === 2 && Auth::user()->id === $blog->user_id)
                <div class="d-flex">
                    <span class="mr-2"><a class="btn btn-primary text-white btn-sm" href="{{ route('blogs.edit', $blog->id) }}">Edit post</a></span>
                    <span>
                        <form action="{{ route('blogs.delete', $blog->id) }}" method="post">
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger text-white btn-sm">Delete</button>
                            {{ csrf_field() }}
                        </form>
                    </span>
                </div>
                @endif
                @endif
                <hr>
                <p>{!! $blog->body !!}</p>
                <hr>
                <div class="diquus ">
                    <div id="disqus_thread"></div>
                        <script>
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() {
                            var d = document, s = d.createElement('script');
                            s.src = 'https://stan.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                        </script>
                    </div>
                </div>
        </article>
        <aside class="col-12 col-md-3">
           
        </aside>
    </div>
</div>
@endsection