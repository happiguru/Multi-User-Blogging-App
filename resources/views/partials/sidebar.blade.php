<h2>Menu</h2>
<hr>
<div class="d-flex flex-column">
    @if(Auth::user() && Auth::user()->role_id === 1)
        <button class="btn btn-info btn-medium my-2">
            <a href="{{ route('admin.blogs') }}" class="text-light">Manage Posts</a>
        </button>
        <button class="btn btn-info btn-medium my-2">
            <a href="{{ route('categories.index') }}" class="text-light">View All Category</a>
        </button>
        <button class="btn btn-info btn-medium mb-2">
            <a href="{{ route('categories.create') }}" class="text-light">Create Category</a>
        </button>
        <button class="btn btn-primary btn-medium mb-2">
            <a href="{{ route('blogs.create') }}" class="text-light">Create Post</a>
        </button>
        <button class="btn btn-info btn-medium my-2">
            <a href="{{ route('users.index') }}" class="text-light">All Users</a>
        </button>
        <button class="btn btn-danger btn-medium mb-2">
            <a href="{{ route('blogs.trash') }}" class="text-light">Trashed Posts</a>
        </button>
        <button class="btn btn-danger btn-medium">
            <a href="http://localhost:8000/laravel-filemanager" class="text-light">File Manager</a>
        </button>
    @elseif(Auth::user() && Auth::user()->role_id === 2)
        <button class="btn btn-info btn-medium my-2">
            <a href="{{ route('categories.index') }}" class="text-light">View All Category</a>
        </button>
        <button class="btn btn-info btn-medium mb-2">
            <a href="{{ route('categories.create') }}" class="text-light">Create Category</a>
        </button>
        <button class="btn btn-primary btn-medium mb-2">
            <a href="{{ route('blogs.create') }}" class="text-light">Create Blog</a>
        </button>
    @elseif(Auth::user() && Auth::user()->role_id === 3)
        <button class="btn btn-primary btn-medium mb-2">
            <a href="{{ route('blogs.create') }}" class="text-light">Create Blog</a>
        </button>
    @endif
</div>