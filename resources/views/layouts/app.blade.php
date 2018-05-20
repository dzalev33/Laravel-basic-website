    <!DOCTYPE Html>
    <html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
        <title>Acme</title>
    </head>
    <body>
    @include('inc.navbar')

    <div class="container">
        @if(Request::is('/'))
        @include('inc.showcase')
        @endif
    <div class="row">
    <div class="col-md-8 col-lg-8">
@include('inc.messages')
        @yield('content')
    </div>

    <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
    </div>

    </div>
    </div>
    <footer id="footer" class="text-center">
        <p>copyright 2018 &copy; Stefan Dzalev</p>

    </footer>


    </body>
    </html>