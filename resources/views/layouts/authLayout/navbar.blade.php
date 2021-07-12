<!--navbar start-->

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="true"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse justify-content-md-center collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">ABOUT US</a>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  COURSES OFFERED
                </a>
                <div class="dropdown-menu dropdwon-home" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/advanceDiploma">ADVANCED DIPLOMA</a>
                  <a class="dropdown-item" href="/cits">CRAFTS INSTRUCTOR TRAINIG SCHEME (CITS)</a>
                  <a class="dropdown-item" href="/ctsnewagecourse">CTS-NEW AGE COURSES</a>

              </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">REGISTER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">CONTACT US</a>
            </li>

        </ul>
    </div>

</nav>

<!--navbar end-->

<!--from auth app.blade-->
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">


            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        {{-- @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif --}}

                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                    {{-- - not working logout after vue integration 11-06-2021--}}
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
{{-- - not working logout after vue integration 11-06-2021--}}

                    @endguest
                </ul>
            </div>
        </div>
    </nav>

