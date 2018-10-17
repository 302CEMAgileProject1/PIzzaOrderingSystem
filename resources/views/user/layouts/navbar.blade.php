{{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
    {{--<div class="container">--}}
        {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
            {{--{{ config('app.name', 'Laravel') }}--}}
        {{--</a>--}}
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
            {{--<!-- Left Side Of Navbar -->--}}
            {{--<ul class="navbar-nav mr-auto">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Menu<span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Promotions<span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Feedback<span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}

                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">About Us<span class="sr-only">(current)</span></a>--}}
                {{--</li>--}}


            {{--</ul>--}}

            <!-- Right Side Of Navbar -->
            {{--<ul class="navbar-nav ml-auto">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@guest--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                    {{--</li>--}}
                {{--@else--}}
                    {{--<li class="nav-item dropdown">--}}
                        {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                            {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                        {{--</a>--}}

                        {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                            {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                {{--{{ __('Logout') }}--}}
                            {{--</a>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--@csrf--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--@endguest--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

<div class="topnav">
    <a class="active" href="/">Home</a>
    <a href="{{ route('get.product.index') }}">Menu</a>
    <a href="{{ route('get.promotion.index') }}">Promotions</a>
    <a href="{{ route('get.feedback.create') }}">Feedback</a>
    <a href="#">About Us</a>

    <div class="topnav-right">
        <!-- Authentication Links -->
        @guest
            <a href="{{ route('login') }}">{{ __('Login') }}</a>

            <a href="{{ route('register') }}">{{ __('Register') }}</a>
        @else
            <li style="list-style:none;">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('get.profile.index') }}">Profile</a>

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
    </div>
</div>