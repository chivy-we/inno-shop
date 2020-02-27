<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
