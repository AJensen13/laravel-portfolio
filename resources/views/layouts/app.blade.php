<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.header')
    </head>

    @include('includes.nav')

    <body>

        <div class="container">
            <div class="row">
                <div class="col-3">
                    @include('includes.sidebar')
                <div>

                <div class="col-9">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer>
            @include('includes.footer')
        </footer>

    </body>
</html>
