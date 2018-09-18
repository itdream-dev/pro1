<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Title -->
  <title>CampusCoin - Wallet</title>
  <link rel="shortcut icon" href="/img/fav-icon.png">
  <!-- Plugin-CSS -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/css/themify-icons.css">
  <link rel="stylesheet" href="/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="/assets/css/animate.css">
  <!-- Main-Stylesheets -->
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/style.css">
  <link rel="stylesheet" href="/assets/css/responsive.css">
  <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">

  <!--Vendor-JS-->
  <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="/assets/js/vendor/bootstrap.min.js"></script>
  <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <!--Plugin-JS-->
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/contact-form.js"></script>
  <script src="/assets/js/jquery.parallax-1.1.3.js"></script>
  <script src="/assets/js/scrollUp.min.js"></script>
  <script src="/assets/js/magnific-popup.min.js"></script>

</head>

<body data-spy="scroll" data-target="#primary-menu" style="background:#368e64">
  <div class="preloader">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>
  <!--Mainmenu-area-->
  <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
    <div class="container">
      <!--Logo-->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/" class="navbar-brand logo">
          <img src="/img/logo_green_back.png" style="height:55px;display:inline"></img>
        </a>
      </div>
      <!--Logo/-->
      <nav class="collapse navbar-collapse" id="primary-menu">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="/login">Login</a></li>
          <li><a href="/register">Sign Up</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">English
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Bulgarian</a></li>
              <li><a href="#">Chinese Simplified</a></li>
              <li><a href="#">Danish</a></li>
              <li><a href="#">Dutch</a></li>
              <li><a href="#">English</a></li>
              <li><a href="#">French</a></li>
              <li><a href="#">German</a></li>
              <li><a href="#">Greek</a></li>
              <li><a href="#">Hindi</a></li>
              <li><a href="#">Hungarian</a></li>
              <li><a href="#">Indonesian</a></li>
              <li><a href="#">Italiano</a></li>
              <li><a href="#">Japanese</a></li>
              <li><a href="#">Korean</a></li>
              <li><a href="#">Norwegian</a></li>
              <li><a href="#">Polish</a></li>
              <li><a href="#">Portuguese</a></li>
              <li><a href="#">Romanian</a></li>
              <li><a href="#">Russian</a></li>
              <li><a href="#">Slovenian</a></li>
              <li><a href="#">Spanish</a></li>
              <li><a href="#">Swedish</a></li>
              <li><a href="#">Thai</a></li>
              <li><a href="#">Turkish</a></li>
              <li><a href="#">Vietnamese</a></li>
            </ul>
          </li>
        </ul>
        </ul>
      </nav>
    </div>
  </div>
  @yield('content')
  <script src="/assets/js/wow.min.js"></script>
  <!--Main-active-JS-->
  <script src="/assets/js/main.js"></script>
</body>
</html>
