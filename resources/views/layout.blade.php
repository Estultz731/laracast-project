<!DOCTYPE html>
    <head>
      <title>@yield('title', 'Home')</title>
    </head>

    <body>
      <ul>
        <li><p><a href="/">Home</a></p></li>
        <li><p><a href="/about">About Us</a></p></li>
        <li><p><a href="/contact">Contact</a></p></li>
      </ul>
      @yield('content')
    </body>
</html>