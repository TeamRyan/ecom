<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta id="token" name="token" value="{{ csrf_token() }}">
        <!-- <meta name="publishable-key" content="{{ Config::get('stripe.publishable_key') }}"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="/css/master.css">
        <link rel="stylesheet" type="text/css" href="/css/navbar.css">
        <link rel="stylesheet" type="text/css" href="/css/footer.css">
        @yield('top-script')
    </head>


    <body id="body">
        @include('partials.navbar')

        @yield('content')

        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        @yield('bottom-script')
    </body>

    @include('partials.footer')

</html>