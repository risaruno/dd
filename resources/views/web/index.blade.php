@include('web/resources/resources')
<body>
  <div class="wrapper">
      @include('web/header')
    <div class="content">
      @yield('content')
    </div>
    <div class="footer">
      @include('web/footer')
    </div>

  </div>
</body>
</html>
