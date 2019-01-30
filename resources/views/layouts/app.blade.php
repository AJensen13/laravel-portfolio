<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.header')
    </head>

    @include('includes.nav')

    <body>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-1 border-right">
                    @include('includes.sidebar')
                </div>

                <div class="col-9 offset-1">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer class="col-12 mt-5">
            @include('includes.footer')
        </footer>

    </body>
</html>
