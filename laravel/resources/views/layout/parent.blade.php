<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>

    <header>Aqui va el navbar</header>

    <!--Main Layout-->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

            <!-- Content -->
            <h5 class="text-uppercase">Footer Content</h5>
            <p>Here you can use rows and columns to organize your footer content.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
                <li>
                <a href="#!">Link 1</a>
                </li>
                <li>
                <a href="#!">Link 2</a>
                </li>
                <li>
                <a href="#!">Link 3</a>
                </li>
                <li>
                <a href="#!">Link 4</a>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
                <li>
                <a href="#!">Link 1</a>
                </li>
                <li>
                <a href="#!">Link 2</a>
                </li>
                <li>
                <a href="#!">Link 3</a>
                </li>
                <li>
                <a href="#!">Link 4</a>
                </li>
            </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    </body>
</html>