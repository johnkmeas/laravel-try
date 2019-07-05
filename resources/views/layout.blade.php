<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <style>
      .is-complete {
        text-decoration: line-through;
      }
    </style>
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
