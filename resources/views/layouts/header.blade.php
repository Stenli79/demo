<header id="header">
    <div class="container">

{{-- --}}
        <div class="header-row d-flex">
            <!-- Logo
            ============================= -->
            <div class="logo">
                <a class="d-flex" href="{{ route('home') }}" title="shkolo.bg - HTML Template">
                    <img src="{{ asset('images/shkolo-logo-blue-300px.png') }}" alt="shkolo.bg" />
                </a>
            </div>
            <!-- Logo end -->

            <button class="navbar-toggler ml-auto p-0" type="button" data-toggle="collapse" data-target="#header-nav" aria-controls="header-nav" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Left Side Of Navbar -->
            <nav class="primary-menu navbar navbar-expand-lg">
                <div id="header-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto font-weight-bold">
                        <li class="active"><a href="{{ url('home') }}">{{ __('Home') }}</a></li>
                        <li><a href="{{ url('link.index') }}">{{ __('Links') }}</a></li>
{{--                        <li><a  href="{{ url('color.index') }}">{{ __('Colors') }}</a></li>--}}
                    </ul>
                </div>
            </nav>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-lg-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>

    </div>
</header>
