<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Styles -->
      <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
      <title>Fitness site</title>
      <!-- Theme style  -->
      <link href="/css/main.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link href="/css/style.css" rel="stylesheet" >
      @yield('head')
   </head>
   <body class="home">
      <nav class="fh5co-nav" role="navigation">
         <div class="top-menu">
            <div class="col-xs-4">
               <div id="fh5co-logo">
                  <a href="{{ url('/') }}">Fitness site</a>
               </div>
            </div>
         </div>
      </nav>
      @yield('content')
   </body>
</html>