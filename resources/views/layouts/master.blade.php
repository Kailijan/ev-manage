<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="msapplication-config" content="{{ asset('favicon/browserconfig.xml') }}">
        <meta name="theme-color" content="#ffffff">
        
        <title>{{ config('app.name') }} | @yield("title")</title>
        
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="container-fluid">
            @yield("content")
        </div>
    </body>
</html>