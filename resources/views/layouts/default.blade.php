<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.3.1/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.7.1-web/css/all.css') }}">
    <title>{{ page_title($title) ?? ''}}</title>

    <style media="screen">

        body{
          font-family: 'Open sans', Helvetica, Arial, sans-serif;
        }
        footer{
            margin:4em 0;
        }

    </style>
  </head>
  <body>
      @include('layouts/partials/_nav')

      @yield('content')

      @include('layouts/partials/_footer')

      <script src="{{ asset('jquery-3.4.1.js')}}" charset="utf-8"></script>
      <script src="{{ asset('bootstrap-4.3.1/dist/js/bootstrap.js')}}" charset="utf-8"></script>
  </body>
</html>
