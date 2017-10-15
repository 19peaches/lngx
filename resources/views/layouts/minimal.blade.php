<!DOCTYPE html>
<html ng-app="polr">
    <head>
        <title>Polr @yield('title')</title>
        @yield('css')
    </head>
    <body>
        <div class='container'>
            @yield('content')
        </div>

        <script src="/js/jquery-1.11.3.min.js"></script>
        @yield('js')
    </body>
</html>
