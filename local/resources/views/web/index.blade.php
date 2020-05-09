@include('web/resources/resources')
<body>
  <div class="wrapper">
    <nav class="navbar-header">
      @include('web/header')
    </nav>
    <div class="content">
      @yield('content')
    </div>
    <div class="footer">
      @include('web/footer')
    </div>

  </div>
</body>
</html>
