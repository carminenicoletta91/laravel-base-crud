<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Css -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">

    </head>
    <body>
      <header>
        <p>Header</p>
      </header>
      <div class="container">
        @yield('title')
        <div class="link">
          @yield('link-option')
        </div>
        <div class="{{$type}}s">
          @yield('content')
        </div>
      </div>

      <footer>
        <p>Footer</p>
      </footer>
    </body>
</html>
