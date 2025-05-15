<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- FAVICON START -->
        <link rel="icon" href="{{ asset("assets/images/favicon.ico") }}" type="image/x-icon">
        <link rel="icon" href="{{ asset("assets/images/favicon-32x32.png") }}" type="image/png">
        <link rel="apple-touch-icon" href="{{ asset("assets/images/apple-touch-icon.png") }}">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('title', 'Laravel')</title>
    </head>
    <body>
        @yield('content')
    </body>
</html>
