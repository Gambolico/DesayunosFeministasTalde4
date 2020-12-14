<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
    <header>PruebaHeader</header>
        <div class="container">
            @yield('content')
        </div>
    <footer>PruebaFooter</footer>

    </body>
</html>