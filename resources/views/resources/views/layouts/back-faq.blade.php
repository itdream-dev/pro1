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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
  <link href="/css/faqstyle.css" rel="stylesheet">

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


  <style>
  .mainmenu-area #primary-menu > ul > li > a {
    padding: 25px 15px;
  }
  .navbar-brand{
    padding:10px 15px;
  }

  </style>
  <div class="mainmenu-area" data-spy="affix" data-offset-top="100" style="background:#368e64;padding:0px 15px">
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
          <li><a href="#refresh" tooltip="refresh"><img src="/img/refresh.png" style="width:15px"/></a></li>
          <li><a href="#signout">Sign Out</a></li>
        </ul>
      </nav>
  </div>
  <style>
    .leftbar li {
      list-style-type: none;
      padding:20px 20px;
    }
    .leftbar li i {
      margin-right:15px;
    }
    .leftbar li a {
      cursor: pointer;
      font-size:22px;
    }
    .leftbar-menu:hover a{
      color:#368e64;
    }
    .leftbar-menu.active a{
      color:#368e64;
    }
  </style>

  <div class="row" style="padding:0px 0px; padding-top:75px;margin:0px; position:fixed; width:100%; height:100%">
    <div class="leftbar col-sm-2" style="background:#F5F7F9;height:100%;padding-top:10px;border-right: 1px solid #DDD">
      <li class="leftbar-menu @if ($page == 'Dashboard') active @endif"><a href="/home"><i class="fa fa-home"></i> Dashboard</a></li>
      <li class="leftbar-menu @if ($page == 'My Wallet') active @endif"><a href="/wallet"><i class="fa fa-shopping-bag"></i> My Wallet</a></li>
      <li class="leftbar-menu @if ($page == 'Security Center') active @endif"><a href="/security_center"><i class="fa fa-lock"></i> Security center</a></li>
      <li class="leftbar-menu @if ($page == 'Setting') active @endif"><a href="/settings"><i class="fa fa-gear"></i> Settings</a></li>
      <li class="leftbar-menu @if ($page == 'Help') active @endif"><a href="/faq"><i class="fa fa-question-circle-o"></i> Help</a></li>
      <p style="position:absolute; left:50%; bottom:20px; width:200px; margin-left:-80px"><a href="/terms" style="color:#368e64">Terms</a> and <a href="/policy" style="color:#368e64">Policy</a></p>
    </div>
    <div class="col-sm-10">
      <div class="row" style="height:100px;padding:10px 10px;border-bottom:1px solid #ddd">
        <div class="col-sm-6" style="text-align:left">
          <h3>{{$page}}</h3>
          <button class="btn btn-default" data-toggle="modal" data-target="#sendModal">Send</button>
          <button class="btn btn-default" data-toggle="modal" data-target="#receiveModal">Request</button>
        </div>
        <div class="col-sm-6" style="text-align:right">
          <h3>Your Balance</h3>
          <h3>1,000 CMPCO</h3>
        </div>
      </div>
      @yield('content')
    </div>
  </div>
  <style>
    .close{
      margin-top:-25px !important;
    }
  </style>
  <div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Send CMPCO</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="row modal-body" >
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">To:</label>
              <div class="col-md-12">
                <div class="input-group input-search" style="">
                  <input type="text" class="form-control" name="query" id="query" placeholder="" value="">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" style="height:40px"><i class="fa fa-qrcode"></i></button>
                  </span>
                </div>
              </div>
          </div>
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">CMPCO Amount:</label>
              <div class="col-md-12">
                  <input id="amount" type="text" class="form-control" name="amount" value="" required autofocus>
              </div>
          </div>
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">Description:</label>
              <div class="col-md-12">
                  <textarea id="amount" type="text" class="form-control" name="amount"></textarea>
              </div>
          </div>
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">Transaction Fee:</label>
              <div class="col-md-12">
                  <input id="amount" type="text" class="form-control" name="amount" value="0.0035" required autofocus>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="receiveModal" tabindex="-1" role="dialog" aria-labelledby="receiveModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Request CMPCO</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top:-25px">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="row modal-body" style="padding:20px 20px">
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">Copy & Share Address: <a href="#viewqrcode" style="color:#10ADE4;float:right">View Qr Code</a></label>
              <div class="col-md-12">
                <div class="input-group input-search" style="">
                  <input type="text" class="form-control" name="query" id="query" placeholder="" value="15ntDnqiBdRvEiVuDxPezstQtv8AC9Rxkw" disabled>
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" style="height:40px">Copy</button>
                  </span>
                </div>
              </div>
          </div>
          <div class="row" style="display:none">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script src="/assets/js/wow.min.js"></script>
  <!--Main-active-JS-->
  <script src="/assets/js/main.js"></script>
  <script>
    // $('.leftbar-menu').click(function(){
    //   $('.leftbar-menu').removeClass('active');
    //   $(this).addClass('active');
    // });
  </script>
</body>
</html>
