<a class="navbar-brand-out" href="{{ route('home') }}">
  <img src="{{ asset('images/icon/DD Korsel.png') }}" class="logo" alt="Dompet Dhuafa Korea Selatan">
</a>
<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand flex-fill" href="{{ route('home') }}">
    <img href="{{ route('home') }}" src="{{ asset('images/icon/DD Korsel.png') }}" class="logo" alt="Dompet Dhuafa Korea Selatan">
  </a>
  <div class="collapse navbar-collapse" id="navbarToggle">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link justify-content-center" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('news') }}" id="News">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('program') }}" id="Program">Program</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('donate') }}" id="Donation">Donation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}" id="Contact">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}" id="About Us">About Us</a>
      </li>
    </ul>
  </div>
</nav>
<button id="launch"><i class="fa fa-caret-up"></i></button>
<script>
  $(function () {
    setNavigation();
    setTitle();
  });

  function setNavigation() {
    var path = window.location.href;
    $(".nav-link").each(function () {
      var href = $(this).attr('href');
      if(path.substring(0,href.length) === href){
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
      }
    });
  }

  function setTitle() {
    var title = $("#title").text();
    if(title!=""){
      $('title').prepend(title+" | ");
    }
  }

  $("#launch").click(function() {
    $("html, body").animate({scrollTop:0}, 'slow');
    return false;
  });
  
  $(window).on('scroll', function(){
    if($("html").scrollTop()>200) {
      $("#launch").css("display", "block");
    } else {
      $("#launch").css("display", "none");
    }
  });

</script>