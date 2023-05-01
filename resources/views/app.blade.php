<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Movie-chooser</title>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('styles.css')}}">
</head>
<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">
 
  @yield('movies')

</body>
</html>