<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Homework">
        <meta name="description" content="Homework Application">
        <meta name="author" content="">
        {{--<link rel="icon" href="{{ url('images/icon.ico') }}">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">--}}
        <title>@yield("title")</title>
    </head>
    <body>
        <div class="container">
            @yield("content")
        </div>
    </body>
</html>
