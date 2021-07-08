<h2>Recent Posts</h2>
<hr>
<div>
    @foreach($blogs as $blog)
        
            <div class="d-flex mb-4">
                <div class="col-5">
                    @if($blog->featured_image)
                    <a href="{{ route('blogs.show', $blog->slug) }}"><img class="img-responsive blog_featured_image mt-2" height="50px" src="/images/featured_image/{{ $blog->featured_image ?$blog->featured_image : '' }}" alt="{{ str_limit($blog->title, 50) }}"></a>
                    @endif
                </div>
                <div class="col-7 recent-post">
                    <a class="recent-post-title" href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                </div>
            </div>
        
    @endforeach
</div>