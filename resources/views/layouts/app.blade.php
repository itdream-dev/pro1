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
							<span class="name">{{Auth::user()->name}}</span>
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
														<input id="send_address" type="text" class="form-control">
														<span class="input-group-btn">
															<button class="btn btn-success" type="button" onclick="scanqrcode();"><i class="fa fa-qrcode"></i></button>
														</span>
								</div>
              </div>
          </div>
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left;margin-top:10px">CMPCO Amount:</label>
              <div class="col-md-12">
                  <input id="send_amount" type="text" class="form-control" name="send_amount" value="" required autofocus>
              </div>
          </div>
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">Description:</label>
              <div class="col-md-12">
                  <textarea id="description" type="text" class="form-control" name="description"></textarea>
              </div>
          </div>
          <div class="form-group">
              <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">Transaction Fee:</label>
              <div class="col-md-12">
                  <input id="txfee" type="text" class="form-control" name="txfee" value="Will be take optimize value automatically" disabled autofocus>
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
														<input type="text" class="form-control" id="deposit-address" @if (isset($wallet)) value="{{$wallet->address}}" @else value="0" @endif disabled>
														<span class="input-group-btn">
															<button class="btn btn-success" type="button" onclick="copyaddress()">Copy</button>
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
              <div class="qrcode"></div>
						</div>
            <div class="col-sm-12">
							<div class="input-group mb-md">
													<input type="text" class="form-control" value="{{$wallet->address}}" disabled>
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
<script src="/js/jquery.qrcode.min.js"></script>
<script>
	// $('.leftbar-menu').click(function(){
	//   $('.leftbar-menu').removeClass('active');
	//   $(this).addClass('active');
	// });

	function copyaddress(){
		var copyText = document.getElementById("deposit-address").value;
		// console.log(copyText);
		// const el = document.createElement('textarea');
		// el.value = copyText;
		// document.body.appendChild(el);
		// el.select();
		// document.execCommand('copy');
		// document.body.removeChild(el);
		// alert("Copied the address to clipboard: " + copyText);

		var textarea = document.createElement('textarea');
textarea.textContent = copyText;
document.body.appendChild(textarea);

var selection = document.getSelection();
var range = document.createRange();
//  range.selectNodeContents(textarea);
range.selectNode(textarea);
selection.removeAllRanges();
selection.addRange(range);

console.log('copy success', document.execCommand('copy'));
selection.removeAllRanges();

document.body.removeChild(textarea);
alert("Copied the address to clipboard: " + copyText);
	}

	function Send(){
		send_amount = $('#send_amount').val();
		send_address = $('#send_address').val();
		var data = {
			send_amount: send_amount,
			send_address: send_address
		};

		$.post('/postSend', data, function(res, status){
			console.log(res);
		});
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

	$(document).ready(function(){
		console.log('request');
		address = $('#deposit-address').val();
		option = {
			//render:"table"
			width: 256,
			height: 256,
			text: address
		};
		$('.qrcode').qrcode(option);
	});
</script>
</body>
</html>
