<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title','weibo app') - laravel 学习</title>
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body>
        @include('layouts._header')
        <div class="offset-md-1 col-md-10">
            @include('shared._messages')
            @yield('content')
            @include('layouts._footer')
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
