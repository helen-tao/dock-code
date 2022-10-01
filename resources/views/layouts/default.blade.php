<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Helen Test') - Practice Everyday</title>
    <link rel="stylesheet" href="{{route('home')}}/css/app.css">
  </head>
  <body>
@include('layouts._header')


    <div class="container">
      @include('shared._messages')
      @yield('content')
      @include('layouts._footer')
    </div>
  </body>
</html>
