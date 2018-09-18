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
  <link rel="stylesheet" href="/assets_index/css/bootstrap.min.css">

  <!-- Main-Stylesheets -->
  <link rel="stylesheet" href="/assets_index/css/normalize.css">
  <link rel="stylesheet" href="/assets_index/style.css">
  <link rel="stylesheet" href="/assets_index/css/responsive.css">
  <link rel="stylesheet" href="/assets_index/font-awesome/css/font-awesome.min.css">

  <!--Vendor-JS-->
  <script src="/assets_index/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="/assets_index/js/vendor/bootstrap.min.js"></script>


</head>

<body data-spy="scroll" data-target="#primary-menu">
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
          <li><a href="/login">@lang('auth.login')</a></li>
          <li><a href="/register">@lang('auth.signup')</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            @if (App::getLocale() == 'en') English @endif
            @if (App::getLocale() == 'zh') Chinese Simplified @endif
            @if (App::getLocale() == 'bg') Bulgarian @endif
            @if (App::getLocale() == 'da') Danish @endif
            @if (App::getLocale() == 'nl') Dutch @endif
            @if (App::getLocale() == 'fr') French @endif
            @if (App::getLocale() == 'de') German @endif
            @if (App::getLocale() == 'hi') Hindi @endif
            @if (App::getLocale() == 'hu') Hungarian @endif
            @if (App::getLocale() == 'id') Indonesian @endif
            @if (App::getLocale() == 'it') Italiano @endif
            @if (App::getLocale() == 'jp') Japanese @endif
            @if (App::getLocale() == 'kr') Korean @endif
            @if (App::getLocale() == 'no') Norwegian @endif
            @if (App::getLocale() == 'pl') Polish @endif
            @if (App::getLocale() == 'pt') Portuguese @endif
            @if (App::getLocale() == 'ro') Romanian @endif
            @if (App::getLocale() == 'ru') Russian @endif
            @if (App::getLocale() == 'sl') Slovenian @endif
            @if (App::getLocale() == 'es') Spanish @endif
            @if (App::getLocale() == 'sv') Swedish @endif
            @if (App::getLocale() == 'th') Thai @endif
            @if (App::getLocale() == 'tr') Turkish @endif
            @if (App::getLocale() == 'vi') Vietnamese @endif
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#" id="bg">Bulgarian (BG)</a></li>
              <li><a href="javascript:void(0)" id="zh">Chinese Simplified (ZH)</a></li>
              <li><a href="#" id="da">Danish (DA)</a></li>
              <li><a href="#" id="nl">Dutch (NL)</a></li>
              <li><a href="#" id="en">English (EN)</a></li>
              <li><a href="#" id="fr">French (FR)</a></li>
              <li><a href="#" id="de">German (DE)</a></li>
              <li><a href="#" id="gr">Greek (GR)</a></li>
              <li><a href="#" id="hi">Hindi (HI)</a></li>
              <li><a href="#" id="hu">Hungarian (HU)</a></li>
              <li><a href="#" id="id">Indonesian (ID)</a></li>
              <li><a href="#" id="it">Italiano (IT)</a></li>
              <li><a href="#" id="jp">Japanese (JP)</a></li>
              <li><a href="#" id="kr">Korean (KR)</a></li>
              <li><a href="#" id="no">Norwegian (NO)</a></li>
              <li><a href="#" id="pl">Polish (PL)</a></li>
              <li><a href="#" id="pt">Portuguese (PT)</a></li>
              <li><a href="#" id="ro">Romanian (RO)</a></li>
              <li><a href="#" id="ru">Russian (RU)</a></li>
              <li><a href="#" id="sl">Slovenian (SL)</a></li>
              <li><a href="#" id="es">Spanish (ES)</a></li>
              <li><a href="#" id="sv">Swedish (SV)</a></li>
              <li><a href="#" id="th">Thai (TH)</a></li>
              <li><a href="#" id="tr">Turkish (TR)</a></li>
              <li><a href="#" id="vi">Vietnamese (VI)</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  @yield('content')

  <script src="/assets_index/js/main.js"></script>
  <script>
    $('.dropdown-menu li a').click(function(){
      id = $(this).attr('id');
      console.log(id);
      location.href = '/locale/' + id;
    });
  </script>
</body>
</html>
