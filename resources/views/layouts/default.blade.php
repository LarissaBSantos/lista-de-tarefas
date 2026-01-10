<!DOCTYPE html>
<html>
    <head>
        @include('components.head')
    </head>
    <body>
        <header>
            @include('components.header')
        </header>
        @yield('content')
        <footer>
            @include('components.footer')
        </footer>
    </body>
</html>