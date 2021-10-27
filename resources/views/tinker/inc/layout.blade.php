<!DOCTYPE html>
<html lang="vi" dir="ltr">
    <head>
        @include('inc.head')
        @yield('css')
    </head>
    <body >
        @include('inc.header')
        @yield('main')
        @include('inc.footer')
        @yield('js')
    </body>
</html>
