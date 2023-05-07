<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Movie-chooser</title>
    <link rel="icon" type="image/png" href="favicon-movie.png">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/styles.css') }}">
    <script src="{{ Vite::asset('resources/js/navbar.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
  </head>
  <body class="text-gray-600 bg-gray-100 work-sans leading-normal text-base tracking-normal">
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
  </body>
</html>