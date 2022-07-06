@include('layouts.stacks.styles')

<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.includes.head')
    </head>
    <body>
        <header>
            @include('layouts.includes.header')
        </header>

        <div id="main">
            @yield('content')
        </div>
        @include('layouts.includes.svg-sprite')

        <footer>
            @include('layouts.includes.footer')
        </footer>

        <div id="scripts">
            <script src="{{ asset('js/app.js') }}"></script>

            @stack('scripts')
        </div>
    </body>
</html>
