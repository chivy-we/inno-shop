<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <link rel="icon" type="image/png" sizes="57x57" href="{{ asset('images/touch-icon-57x57.png') }}">
        <link rel="icon" type="image/png" sizes="60x60" href="{{ asset('images/touch-icon-60x60.png') }}">
        <link rel="icon" type="image/png" sizes="72x72" href="{{ asset('images/touch-icon-72x72.png') }}">
        <link rel="icon" type="image/png" sizes="76x76" href="{{ asset('images/touch-icon-76x76.png') }}">
        <link rel="icon" type="image/png" sizes="114x114" href="{{ asset('images/touch-icon-114x114.png') }}">
        <link rel="icon" type="image/png" sizes="120x120" href="{{ asset('images/touch-icon-120x120.png') }}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/touch-icon-512x512.png') }}">

        <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="{{ asset('images/touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="60x60" href="{{ asset('images/touch-icon-60x60.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="{{ asset('images/touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="{{ asset('images/touch-icon-76x76.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="{{ asset('images/touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="{{ asset('images/touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="512x512" href="{{ asset('images/touch-icon-512x512.png') }}">

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">
        <title>Inno Store</title>
    </head>
    <body>
        <div id="app">
             <router-view></router-view>
        </div>

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
