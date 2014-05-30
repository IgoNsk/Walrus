<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Laravel 4 - Tutorial
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
        {{ HTML::style('/bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('/bootstrap/css/bootstrap-theme.min.css') }}

        <style>
        @section('styles')
        @show
        </style>
    </head>

    <body>
        @yield('body')
        <!-- Scripts are placed here -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        {{ HTML::script('/bootstrap/js/bootstrap.min.js') }}

    </body>
</html>
