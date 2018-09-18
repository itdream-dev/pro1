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
          <img src="/img/logo_green_back.png" style="height:50px;display:inline"></img>
        </a>
      </div>
      <!--Logo/-->
      <nav class="collapse navbar-collapse" id="primary-menu">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/dashboard" tooltip="refresh"><img src="/img/refresh.png" style="width:15px"/></a></li>
          <li><a href="/">Sign Out</a></li>
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
    <div class="leftbar col-sm-3" style="background:#F5F7F9;height:100%;padding-top:10px;border-right: 1px solid #DDD">
      <li class="leftbar-menu @if ($page == 'Dashboard') active @endif"><a href="/home"><i class="fa fa-home"></i> Dashboard</a></li>
      <li class="leftbar-menu @if ($page == 'My Wallet') active @endif"><a href="/wallet"><i class="fa fa-shopping-bag"></i> My Wallet</a></li>
      <li class="leftbar-menu @if ($page == 'Security Center') active @endif"><a href="/security_center"><i class="fa fa-lock"></i> Security center</a></li>
      <li class="leftbar-menu @if ($page == 'Settings') active @endif"><a href="/settings"><i class="fa fa-gear"></i> Settings</a></li>
      <li class="leftbar-menu @if ($page == 'Help') active @endif"><a href="/faq"><i class="fa fa-question-circle-o"></i> Help</a></li>
      <p style="position:absolute; left:50%; bottom:20px; width:200px; margin-left:-80px"><a href="/terms" style="color:#368e64">Terms</a> and <a href="/policy" style="color:#368e64">Policy</a></p>
    </div>
    <div class="col-sm-9">
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
          <div class="modal_main_screen row" style="padding:0px 15px 15px 15px">
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">To:</label>
              <div class="col-md-12">
                <div class="input-group input-search" style="">
                  <input type="text" class="form-control" name="query" id="query" placeholder="" value="">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button" style="height:40px" onclick="scanqrcode();"><i class="fa fa-qrcode"></i></button>
                  </span>
                </div>
              </div>
          </div>
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left;margin-top:10px">CMPCO Amount:</label>
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
          <div class="receive_modal_main_screen row" style="padding:0px 15px 15px 15px">
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">Copy & Share Address: <a href="#viewqrcode" style="color:#10ADE4;float:right" onclick="receive_modal_view_qr_screen();">View Qr Code</a></label>
              <div class="col-md-12">
                <div class="input-group input-search" style="">
                  <input type="text" class="form-control" name="query" id="query" placeholder="" value="15ntDnqiBdRvEiVuDxPezstQtv8AC9Rxkw" disabled>
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" style="height:40px">Copy</button>
                  </span>
                </div>
              </div>
          </div>
          </div>
          <div class="receive_modal_qr_screen row" style="display:none;padding:0px 15px 15px 15px">
            <div class="col-sm-6">
              Scan QR Code:
            </div>
            <div class="col-sm-6" style="text-align:right;">
              <a style="color:#10ADE4;cursor:pointer" onclick="receive_modal_go_main_screen()">Go Back</a>
            </div>
            <div class="col-sm-12" style="text-align:center;padding:20px">
              <img ng-if="image" ng-src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAD6CAYAAACI7Fo9AAAYS0lEQVR4Xu2d0ZLbxhJDvf//0b4l3UpStiifoxHYO5SR12mi0WiAw107ydePHz9+/viL/vn5k8f9+vpCRQgngYEkQgWGq2lFmhgMqjFcDQ+DQ1yudH5zNDv/ShMB15QJCMcYiTCmZDdcDZeJeQxXw8PgmJmvUtOgH2zKmIDMlMCYMpHhariQJgaDagxXw8PgEJcrnTfoDfqPlOlNwN4Nh+FqeBicd7nu9HyD3qA36Dsl8iQuDXqD3qCfFK6dYBv0Br1B3ymRJ3Fp0Bv0Bv2kcO0E26A36A36Tok8iYsKuvkt5kn8Xoal36aaWQjjZVJPHjBcqFeCq+Fh+hBOAoP0sOfEhWaxfSbqaJYbhwZ98UZPLDBhJrNk4mp4mD6Ek8CgWew5caFZbJ+JOpqlQX+yBSNcYoEJMyW4Gh6mD+EkMBK6340Pf82ZZknxSODQLA16g35XwJjamIlwEhiJYDToJ/4smVoQ4ZCZyIzGBMTBnhsuhEXz0vMN+rFCid0Y7RM1xgP9Gb0/o/dGP/BAg554BZ2IQW83s0DCSNE3XKhXgqvhYfoQTgKD9LDnxIVmsX0m6miW/ozen9H7M/pf8ONqLOjmjZJ4s5m3LHExGAmuBiPBlTAMD6OJ6WNwiA/1SfQwv4cxfYgrzWrPiYvhEfkZ3TSyQ/2pjgZOLTDB1WCQbol5DY9UH4NDfBKaUI+UT4ir4WFqSFfDo0E3Sp9UQwuiBRvDGuqpPgaH+CQ0oR5GNzMLcTU8TA1xMTwadKP0STW0IFqwMayhnupjcIhPQhPqYXQzsxBXw8PUEBfDo0E3Sp9UQwuiBRvDGuqpPgaH+CQ0oR5GNzMLcTU8TA1xMTwadKP0STW0IFqwMayhnupjcIhPQhPqYXQzsxBXw8PUEBfDo0E3Sp9UQwuiBRvDGuqpPgaH+CQ0oR5GNzMLcTU8TA1xMTwadKP0STW0IFqwMayhnupjcIhPQhPqYXQzsxBXw8PUEBfDo0E3Sp9UQwuiBRvDGuqpPgaH+CQ0oR5GNzMLcTU8TA1xMTwa9AOljXC0IFrOpNmIi5mXMKbmMTxoN1NcDQ9TQzOb/TXoDTr+u9k3ichsU+ExPEx4KBymD2EYHqaGuBgeDXqD3qAfeIDCZV5sJsSmhrg06N+4QFqOMUoCw9zGxigJLlMYJjw0c4Kr4WFqiAvNcvea+Z8sJhqZgaiGeEyG50pcSTdjFMKY0t7woN1McTU8TA3NbPbXoPfTvZ/u3/jl16CfJD69Hc3bPrEc0yfFlXDMjUAYU/MYHmY/NLPpQxiGh6khLoZHb/Te6L3RT7pUTIhNTYO+EFISzQhvasxblnAMV9PH4BAX04cwEueJWaa+PhLz3jBoZrOb3uipbfyGY8Sn1rRgY1hjFOJh+xicd2uMJqYH7cf0IQzDw9QQF8OjQTdKL9QY8QmWFmwDaHCIS2Ie6mHOE7MY3UyfKU2Ii+HRoBt3LdQY8QmWFmwM2xv9WGXaT0p72rE5Jy40y90n/XN0I/XrNUZ8QqUFN+ik4PNz2k9K+3WG/z1JXGiWBj2xhScYRnxqTwtu0EnBBv0fBXqjr3vlj0826OcIa15+pjPtx/QhDMPD1BAXw6NBN0ov1BjxCZYW3BudFOyN3ht93SPqyQZdyfRykXn5GVDaj+lDGIaHqSEuhkfkRjdkp2poaBLN8qQ+FmeiLjGzmZf6GIyEHsTDfAkZjATXBIbRtUFfVNqIuwgdfyxhWjMv9TEYieGJR4P+RGUjXGJBCQwyU2oW6pOYJYWRmNnMS30MRmJm4tGgN+jaZ1Om1YT+UGiMT33MvNTHYBAPc048GvQG3fjoXjNlWk2oQf9XgQb90Qz9GX0xSQ36o3AUsCnNiId5URuMRevEHzO6NuiLshtxF6HjjyVMa+alPgYjMTzxaND76a59NmVaTaif7v10/4MHeqMvJqlB76f7onXijxkvqqDHmX0jYOKz7kafcIz4Exipz9Rd5knwMJp8o0VPad2gH8iaMNMuGMbU9MIxGJ/28jslbd8I2qA36Ph10qB/Y0JDrRv0Br1BD4VpZ5gGvUFv0HdOaIhbg96gN+ihMO0M06A36A36zgkNcWvQG/QGPRSmnWG+fpo/W9l5ghO47fRHYyeMdxqk0Y2a146k0Np5g77xjb620u97qkH/Pu2pc4PeoJNH9HmDrqUaL2zQG/SY6Rr0mJRxoAa9QY+ZqkGPSRkHatAb9JipGvSYlHGgBr1Bj5mqQY9JGQdq0Bv0mKka9JiUcaAGvUGPmapBj0kZB1J/M47+EsPUghN9jII07w1jiovhO1FjNCEeCc0SPMz+duqT0K1BP3CnWXJCfArGTudGE+Kb0CzBo0F/sikSd2qBiT5kxts5zWuMYvpcqcZoQvMk9pfgYfa3U5+Ebr3Re6NTPu/nCeMnDJvg0aD3RtemTphWJWyTokTAEpoleDToDXqDvugB8z5q0B9VMi+uhG79dO+nu8loP92VSo9FFNIG/UBYEm1xFw+PTYmf4juBYzQhHon9JXj0033xs21qgYk+ZEb7i6cpLobvRE0iYAnNEjz+yqCb/8LMTgt619RmlpSZduFKM0/NSzzMS9ZgGN1p5qk+hmuCi/orsIlGJKwZOFFjZvk0rjTz1LzEo0E/drjRjbLRoC/+Mo6ETZybBZuQEo7B2GUemsXypJmn+hi+CS4NeoMe+Y16yrC7BDARLvOFktKNcBr0Br1BP/BAg06vjsXf3C/CvvyYWSDdKi83XXwgxZVwpuYlHuYGNBhGbpp5qo/hmuDSG703em/03uj/VyDxRqE3qHmzJWrMLJ/GlWaempd49Ebf/LfuxihmyRTkRB+DQTxS5wlNElxSmiTmIS6JHqkXCnE1l+QYRuIvzCTIGsMm+hgMwyVRkzLtu1xSmiTmIS6JHg36E8eQuLQc82YzZk30MRiGS6KGdE30MBgpTRLzEJdEjwa9QTe5iNWkTPsuIQqXxU/MQ1wSPRr0Bt16OlKXMu27ZChcFj8xD3FJ9GjQG3Tr6UhdyrTvkqFwWfzEPMQl0aNBb9CtpyN1KdO+S4bCZfET8xCXRI8GvUG3no7UpUz7LhkKl8VPzENcEj0a9AbdejpSlzLtu2QoXBY/MQ9xSfRo0O1Gf6tLib/Y/pfHdjGKmWVKt4QmhGHmTdQYzQxXg0N8TR/CSJybWdTfdScyphFhpM5J/BRX6mPmSXGhXsTV8CAM4pA6T3E1OMT5Spo06LTNJ+eJJSfMZugTV8ODMAyPRE2Kq8EhvlfSpEGnbTbodwWuZGrDtUFfMH5CtIW2h4/QklNcqY+ZJ8WFehFXw4MwiEPqPMXV4BDnK2nSG5222Ru9N/qJHli03y+PmZdWg76odOJtbha0SO+Xx4ir4UEYCZ4GI8XV4BCfK2nSoNM2T3ybJ8xm6JMhDQ/CMDwSNSmuBof4XkkTFXQSxQw8gUGLsedmHsKieVO/4DJ9iOvU+afpeql5dvkPTxjRpkxtuFA4DNepPsR16nxq3vZ53Ghv9AOXf5pRpoJMfT5N10vN0xv90Z6XWuDX7f98fY1/Pk3XS83ToDfoU6+JSwVDvEAvNU+D3qA36Ac/0zboa8GgX06ZtyNhpAxruFAvw3WqD3GdOp+at336yzjl6U8zihp6oOjTdL3UPP10X/tCoVz0Rv98XRt0SsHieSI8BmOR3suP7WKUlCY0T6IP9bBLIC479SGuZuaxP0c3ZKjGDEwLMhjEI3VOXE0fMw/1MRiGy0Qf6mF43mpo5p36EFczc4NuVDqpJmEmYwLqYzCMBBN9qIfh2aA/UYmMkBKflkQ8bs8TF4NBPFLnxNX0MfNQH4NhuEz0oR6GZ4PeoFufROoSpjUhpT4Gwww80Yd6GJ4NeoNufRKpS5jWhJT6GAwz8EQf6mF4NugNuvVJpC5hWhNS6mMwzMATfaiH4dmgN+jWJ5G6hGlNSKmPwTADT/ShHoZng96gW59E6hKmNSGlPgbDDDzRh3oYng26Vem3uoRRdlqgmYf4GoxFuV9+jLgaQDPPRB/TYxeuN12Jr+Fq9kM16s/REUT8mz6EQYLQ8/+ck3CmD2HstECji5mZcBKaUI/UTbsL15180qAfuC9hFINhjJ+oadAfVdxFkymfNOgNunqXGENOhMf02IVrb/QDa5kFGkfSkk0fwthpgUYTMzPhJDShHv10Nwqt1fRG742unNOgP8qU0MRgqAVBUYPeoCsfGUNOfDmYHrtw3enLr0Fv0Bt0pUBvdPx3exd1fHjMvM2pl3nbE0bqTU3zGK6EYWYxfQwOcUn0oR7m53wzi6lJcDEYhgvVbHOjE1ETLoORMJvhYvrQkhMYV9OE+JJmDfqxgg06OevJORkuEdIEhhnP9DE4CU2oD/Vo0Bv0uwI7mZpMa7gSBgVnN02Ir5nX6EZ9zHmCi8EwXKimNzop1BtdK0SmTQSQeiRfXDR4govBIB7mvEE3Kh3U0IKMqScwzHiGq8FJzEN9qEeD3k/3fro/SVGDTq+X4/PES8dgrLH79ane6Isq0oJMeCYwzHiGq8FJzEN9qEdv9N7ovdF7o9N75KXzxEvHYLxE6tmOb/9uPAElyCRuDcOD+hgM0mPq1jBcad4bV4NDM5s+hGHOp7hSn9S81MdoQjWG61eDTjI++RQK/Mc2qLMxiVmywSEupg9hmPMprtQnNS/1MZpQjeHaoJOKJ3/u/qm9MYlZssEhGUwfwjDnU1ypT2pe6mM0oRrDtUEnFRv0uwLGTItS/vJYIhiGK/UxGGZe6mMwqMZwbdBJxQa9QV/0yO2xBn1BPCMavd0MhqFGfQwG1RiuhofBIS6mD2GY8ymu1Cc1L/UxmlCN4dobnVTsjd4bfdEjvdEXhTNvR3q7GQxDj/oYDKoxXA0Pg0NcTB/CMOdTXKlPal7qYzShGsO1Nzqp2Bu9N/qiR7a60X9OvHKEUOattAlVMc21Sqa0N32mlCMvGa6EcZvF4NDMpg9hRP6uOzUx50aQxMCGy99WM6W96TOlPXnJcCWMBv1gmylhp4zySX2mtDd9pnSlkBquhNGgN+hTflZ9UqamZqYPYaTOKaSGK2E06A16yq8RnJSpiYzpQxipcwqp4UoYDXqDnvJrBCdlaiJj+hBG6pxCargSRoPeoKf8GsFJmZrImD6EkTqnkBquhNGgN+gpv0ZwUqYmMqYPYaTOKaSGK2FsFfSpfx+dFjQlrFkOcU2d08yGK2HcuBKOwTAzJ/oQhuFh5qE+BsNwoRriQc/b87G/GUeEjLBGFMIxGMQ1dZ7gShgN+vG2yAdG14QPiEeix/3Lojd6SsrXcchMxgSE0aA36A3669mMPkEhbdDX5CZdJ19+NIHZMWGY897oRqWTasiQxgSEMWlq4pvgalaR6GMwDBeqIc3oeXveoFulTqgjMxkTEEaD3k/3frqfEN5XICmkDforav5XS7pOvvxoArNjwjDnvdGNSifVkCGNCQhj0tTEN8HVrCLRx2AYLlRDmtHz9rxBt0qdUEdmMiYgjAa9n+73T/fEf3jCmC2RE2N86pPiOsEl0YP0SJ6TtlPzEA/z8kvpYrhQL9LN9GjQSeUn5yS+gaUFJXoYHqmaXeYhHg364saNsIvQvzyWMH6K6wSXRI+E7haDtJ2ah3g06Hajv9UZYRehG/SEcEMY5IMGfW0RpBvp3p/R13S/P0XiG2haUKKH4ZGq2WUe4pHan9HNcCEc8oHp0Z/RSeX+jK4VIsORYXUjKCQeDfqi0kbYReh+uieEG8IgHzToa4sg3Uj3frqv6d5P9ye6keHIsG+s45dHiUdv9M0XaIxAS54y205cpzShPkaT1jwqQJ41uquf0QmIiEwur1wf1Z7ShPpM+uCTelG+jO4N+jc6ghZEC7bUd+lj+bbuVwXIB7Rf/TM6ARGRycWVa2/0Sb9N9KJ8kecb9Ikt/aEHLYgWbOnv0sfybV1vdPTAlKmRiCiY4rpLHyFJSw4UoBc+7bc3+jfbihZEC7b0d+lj+bauNzp6YMrUSEQUTHHdpY+QpCW90Z0Hpkzt2Py5aorrLn0Smv2NGPRlR/vVn+5/m7hGuF00IRPcl/x1+w8Jnf8PcTE8JjBSSph5Ur3exVF/jv5uk6s9f6UFUjAa9PPcdyWfNOgHPrjSAhv0xwUaTRLxv5JPGvQGPeH5OwYFzARjAiM1sJkn1etdnAa9QX/XQ/8+PxFSEy7ikRrYcEn1ehenQW/Q3/VQgx5T8DygBr1Bj7mLblJzA05gpAY286R6vYvToDfo73qoN3pMwfOAGvQGPeauidvY3KLEIzWw4ZLq9S6O+l8yvdtkp+eNCaYWSFxSPKhPaj8pvu/yMfMS1wTGbQ6DQ/NGuN64UKNPOjfCk7ApPYhLigf1Sc2T4vsuHzMvcU1gNOjvbvKN51MLfINC9Gdaw8PMbHCohsJDz6fOzbzENYHRoKc2uoCTWuBC64dHiAuZ0XKgPhaH6lJ8qQ+dm3mJawKjQadNnXieWmCCInEhM1oO1MfiUF2KL/WhczMvcU1gNOi0qRPPUwtMUCQuZEbLgfpYHKpL8aU+dG7mJa4JjAadNnXieWqBCYrEhcxoOVAfi0N1Kb7Uh87NvMQ1gdGg06ZOPE8tMEGRuJAZLQfqY3GoLsWX+tC5mZe4JjAuF3QzNIk/dT61QJrHaHYlrjSvOad5TTASGIarqTFcCMf4hDDMufoLM1NkDGGqIfHNLIRBHIxhbzXUZyeuZmaqoXmNbgkM4mnPDRfCMjsmDHPeoB+oNLVA6mNMQBjGBKaPwaEaw5W4JDCIpz03XAiL5qXn7XmD3qBH/pqmMZwJBhk/gWG4mhrDhXBoXnrenjfoDXqDbtPyW12Dvihc4jES37xBCcPwTPRJYKS4GhyqMbrSzAkM4mnPDRfConnpeXveG703em90m5be6ItKnfAYvWXNG5QwDO1EnwRGiqvBoRqjK82cwCCe9txwISyal563573Re6P3Rrdp+dtv9MSbzWht3n7ExWAYLtTHYFBNiiv1mZjlxiExzxRX0uxq55EbfUp8YxTiYjDMEqmPwaCaFFfqMzFLg05bOPe8QV/UdyIcDfrjciZ0X7TE1o816IvrmTBcg96gL9rz4bEGfVHJBv114RIvrgndX59s/yca9MUdTRguEQwz3sQs/RndbOK8mgZ9UduJcDTo/XRftGc/3VPhadBft2BC+wndX59s/yd6oy/uaMJwiWCY8SZm6ae72cR5NQ36gbZTxk+s1bwMpuYhLoYHYRjNPq0PzWzmbdAbdPKRPqeQGkMShiHzaX1oZjNvg96gk4/0OYXUGJIwDJlP60Mzm3kb9AadfKTPKaTGkIRhyHxaH5rZzNugN+jkI31OITWGJAxD5tP60Mxm3ga9QScf6XMKqTEkYRgyn9aHZjbzNugNOvlIn1NIjSEJw5D5tD40s5m3QW/QyUf6nEJqDEkYhsyn9aGZzbwN+klBTxiWFnw7N0vehYvhQfMYDKPbVA3NY3jQzKZHg96gG6+pGjIcGda8uAyGIjtURJoYGjSz6dGgN+jGa6qGDEeGbdCPZSbdSPe7rrf/lBdtMdGIephz4pEyihGO+BquhGHODddduBgeNI/BMLpN1dA8hgfNbHo06L3RjddUDRmODJt6USuyQ0WkiaFBupkeDXqDbrymashwZNgGvZ/udwWmjEKGNa43XA0O1Riuu3AxPGgeg0GaTZ7TPIYLzWx69EbvjW68pmrIcGTY3ui90XujP4kahct+CakkQxFxadDXVCbdSPf7CzTxW/c1+uc8RUOTaJZVos8EhpknpQn1onlTLyXTh7imzhPa0jymR4O+uNGI+F83+Z//oxYIGGY808fgUA1p1qAfK0i6mf016OTOxU9mJX6D/qCu0Y1WRsGg55PnE/OYHg364lbJTEr8Br1BF/6LeK0/owulD0oi4jfoDbqwX8RrDbpQukFfE+m3p8iw/Rm9P6Nro5GZzCe1aZboM4FhZklpQr1o3ga9QScP/XtOZkqZOtFnAsMIl9KEetG8Dfo3B50WeKVzY2pjSJo50SeBMRke4pvQlXS35wmuhHHjQjOPYZif0a14V6hLCGvmTPRJYDTox9sibSmgVlfCIR6xl0WD/mgEWk6Dfl54jLaJGgqY8QBhxEKa+NOZBr1BN8FJGN9gGC6JGgqp4UoYDXpiU4sYieWY1ok+CQz7iUkzJYxvMIhH6py0NVwJo0FPbWsBJ7Ec0zbRJ4HRoJ/3Y0ZiP2MY/XTvp7t5cSVuOINhuCRqKGCGK2H0Rk9sahEjsRzTOtEngdEbvTf6/YXTG703unlxJW44g2G4JGroJWq4EsZON/r/AC9VLFV1JES6AAAAAElFTkSuQmCC" src="data:image/png;base64,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">
            </div>
            <div class="col-sm-12">
              <div class="input-group input-search" style="">
                <input type="text" class="form-control" name="query" id="query" placeholder="" value="15ntDnqiBdRvEiVuDxPezstQtv8AC9Rxkw" disabled>
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" style="height:40px">Copy</button>
                </span>
              </div>
            </div>
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
    function receive_modal_go_main_screen(){
      $('.receive_modal_qr_screen').hide();
      $('.receive_modal_main_screen').show();
    }
    function receive_modal_view_qr_screen(){
      $('.receive_modal_main_screen').hide();
      $('.receive_modal_qr_screen').show();
    }
    function scanqrcode(){
      alert('permission to use camera denied');
    }
  </script>
</body>
</html>
