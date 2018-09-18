<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Campus Wallet</title>
	<meta name="keywords" content="Campus Wallet - Admin" />
	<meta name="description" content="Campus Wallet - Admin">
	<meta name="author" content="okler.net">
  <link rel="shortcut icon" href="/img/fav-icon.png">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.css" />

	<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="/assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="/assets/vendor/jquery-ui/jquery-ui.css" />
	<link rel="stylesheet" href="/assets/vendor/jquery-ui/jquery-ui.theme.css" />
	<link rel="stylesheet" href="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="/assets/vendor/morris.js/morris.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="/assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="/assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="/assets/stylesheets/theme-custom.css">
	<link rel="stylesheet" href="/assets/vendor/jquery-datatables-bs3//assets/css/datatables.css" />
	<link rel="stylesheet" href="/assets/vendor/pnotify/pnotify.custom.css">
	<link rel="stylesheet" href="/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css">
  <link href="/css/faqstyle.css" rel="stylesheet">

	<!-- Head Libs -->
	<script src="/assets/vendor/modernizr/modernizr.js"></script>
	<!-- Vendor -->
	<script src="/assets/vendor/jquery/jquery.js"></script>
	<script src="/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="/assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="/assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="/assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
	<script src="/assets/vendor/pnotify/pnotify.custom.js"></script>
	<script src="/assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>

</head>
<body>
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="../" class="logo">
					<img src="/img/logo_green_back.png" style="width:150px;margin-right:5px"/>
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>

			<!-- start: search & user box -->
			<div class="header-right">

				<span class="separator"></span>

				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="/assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="/assets/images/!logged-user.jpg" />
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name">Skyclean</span>
							<!-- <span class="role">administrator</span> -->
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu" style="background:#368e64">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<!-- <li>
								<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
							</li>
							<li>
								<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
							</li> -->
							<li>
								<a role="menuitem" tabindex="-1" href="{{ route('logout') }}" onclick="event.preventDefault();console.log('logout');
								document.getElementById('logout-form').submit();">
								<i class="fa fa-power-off"></i> Log Out
							</a>
						</li>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</ul>
				</div>
			</div>
		</div>
		<!-- end: search & user box -->
	</header>
	<!-- end: header -->

	<div class="inner-wrapper">
		<!-- start: sidebar -->
		<aside id="sidebar-left" class="sidebar-left">

			<div class="sidebar-header">
				<div class="sidebar-title">
					<!-- Page Menu -->
				</div>
				<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>

			<div class="nano">
				<div class="nano-content">
					<nav id="menu" class="nav-main" role="navigation">
						<ul class="nav nav-main">
							<li>
								<a href="/dashboard">
									<i class="fa fa-home" aria-hidden="true"></i>
									<span>Dashboard</span>
								</a>
							</li>
							<li>
								<a href="/wallet">
									<i class="fa fa-shopping-bag" aria-hidden="true"></i>
									<span>My Wallet</span>
								</a>
							</li>
							<li>
								<a href="/security_center">
									<i class="fa fa-lock" aria-hidden="true"></i>
									<span>Security Center</span>
								</a>
							</li>
							<li>
								<a href="/settings">
									<i class="fa fa-gear" aria-hidden="true"></i>
									<span>Settings</span>
								</a>
							</li>
							<li>
								<a href="/faq">
									<i class="fa fa-question-circle-o" aria-hidden="true"></i>
									<span>Help</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>

				<script>
				// Maintain Scroll Position
				if (typeof localStorage !== 'undefined') {
					if (localStorage.getItem('sidebar-left-position') !== null) {
						var initialPosition = localStorage.getItem('sidebar-left-position'),
						sidebarLeft = document.querySelector('#sidebar-left .nano-content');

						sidebarLeft.scrollTop = initialPosition;
					}
				}
				</script>

			</div>

		</aside>
		<style>
		  .page-header p{
		    font-size:20px;
		    color:#368e64;
		  }
		  h3{
		    color:#368e64;
		  }
			.page-header > div > div:nth-child(1) > div:nth-child(1) {
				padding-left:20px;
			}
			.page-header > div > div:nth-child(1) > div:nth-child(2){
				padding-left:40px;
			}
		</style>
		@yield('content')
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
								<div class="input-group mb-md">
														<input type="text" class="form-control">
														<span class="input-group-btn">
															<button class="btn btn-success" type="button" onclick="scanqrcode();"><i class="fa fa-qrcode"></i></button>
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
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="Send()">Send</button>
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
								<div class="input-group mb-md">
														<input type="text" class="form-control" @if (isset($wallet)) value="{{$wallet->address}}" @else value="0" @endif disabled>
														<span class="input-group-btn">
															<button class="btn btn-success" type="button" onclick="">Copy</button>
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
              <img ng-if="image" ng-src="data:image/png;base64,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" src="data:image/png;base64,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">
            </div>
            <div class="col-sm-12">
							<div class="input-group mb-md">
													<input type="text" class="form-control" value="15ntDnqiBdRvEiVuDxPezstQtv8AC9Rxkw" disabled>
													<span class="input-group-btn">
														<button class="btn btn-success" type="button" onclick="">Copy</button>
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
</section>



<!-- Specific Page Vendor -->
<script src="/assets/vendor/jquery-ui/jquery-ui.js"></script>
<script src="/assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
<script src="/assets/vendor/jquery-appear/jquery-appear.js"></script>
<script src="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="/assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="/assets/vendor/flot/jquery.flot.js"></script>
<script src="/assets/vendor/flot.tooltip/flot.tooltip.js"></script>



<script src="/assets/vendor/flot/jquery.flot.pie.js"></script>
<script src="/assets/vendor/flot/jquery.flot.categories.js"></script>
<script src="/assets/vendor/flot/jquery.flot.resize.js"></script>
<script src="/assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>
<script src="/assets/vendor/raphael/raphael.js"></script>
<script src="/assets/vendor/morris.js/morris.js"></script>
<script src="/assets/vendor/gauge/gauge.js"></script>
<script src="/assets/vendor/snap.svg/snap.svg.js"></script>
<script src="/assets/vendor/liquid-meter/liquid.meter.js"></script>
<script src="/assets/vendor/jqvmap/jquery.vmap.js"></script>
<script src="/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

<script src="/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
<script src="/assets/vendor/ios7-switch/ios7-switch.js"></script>
<script src="/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>

<script src="/assets/vendor/jquery-datatables-bs3//assets/js/datatables.js"></script>
<!-- Theme Base, Components and Settings -->
<script src="/assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="/assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/assets/javascripts/theme.init.js"></script>

<!-- Examples -->
<script src="/assets/javascripts/tables/examples.datatables.default.js"></script>
<script>
	// $('.leftbar-menu').click(function(){
	//   $('.leftbar-menu').removeClass('active');
	//   $(this).addClass('active');
	// });
	function Send(){
		
	}
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
