<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand navbar-brand-logo" href="{{ url('/') }}">
           <i class="fas fa-smile-wink"></i> {{ config('app.name', 'Laravel') }} <i class="fab fa-studiovinari"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-anchor" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-anchor" href="http://localhost:8000/categories/html">HTML</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-anchor" href="http://localhost:8000/categories/css">CSS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-anchor" href="http://localhost:8000/categories/ruby-on-rails">Rails</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-anchor" href="http://localhost:8000/categories/php">PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-anchor" href="http://localhost:8000/categories/laravel">Laravel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-anchor" href="{{ route('contact') }}">Contact</a>
                    </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="btn btn-sm btn-primary nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-warning nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    @if(Auth::user())   
                        <li class="nav-item">
                            <a class="nav-link nav-link-anchor" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link-anchor-name" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('blogs')}}">Blogs <span class="badge bg-dark text-white">{{ $blogs->count() }}</span></a>
                            <a class="dropdown-item" href="{{ route('categories.index') }}">Categories <span class="badge bg-dark text-white">{{ $categories->count() }}</span></a>
                            <a class="dropdown-item" href="">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>