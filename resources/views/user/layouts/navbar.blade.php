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

                   <a class="dropdown-item text-dark" href="{{ route('profile.show', [Auth::user()]) }}">Profile</a>

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
