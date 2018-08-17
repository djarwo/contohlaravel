<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{'css/master.css'}}">
  </head>
  <body>
    <header>
      <nav>
        <a href="/">Home</a>
        <a href="/blog">Blog</a>
      </nav>
    </header>
    <br>

    @yield('content')

    <br>
    <footer>
      <p>
        &copy laravel 2018
      </p>
    </footer>
    <script src="{{url('js/main.js')}}">

    </script>
  </body>
</html>
