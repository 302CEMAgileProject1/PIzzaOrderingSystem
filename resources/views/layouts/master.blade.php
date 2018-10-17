<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('user.layouts.header')
</head>
<body>
    <div id="app">
        @include('user.layouts.navbar')

        @include('user.layouts.sectionheader')

        <div class="container">
            @yield('content')
        </div>

        @include('user.layouts.footer')
    </div>
</body>
</html>
