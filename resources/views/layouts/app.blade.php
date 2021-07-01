
<!DOCTYPE html><html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>
        <header class="header-minimal">
            <div>
                <h2>
                    Catalog of books for your viewing
                </h2>
            </div>
        </header>
        @yield('content')
        <footer class="footer-minimal">
            <div>
                <h2>
                    A room without books is like a body without a soul.
                </h2>
            </div>
        </footer>
    </body>
</html>
