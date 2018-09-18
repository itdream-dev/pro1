  @extends('layouts.back_index')

  @section('content')
  <style>
  @media only screen and (max-width: 1500px) {
    .v-center{
      margin-top:50px !important;
    }
  }
  </style>
  <header class="header-area overlay full-height relative" id="home-page" style="background:#368e64">
    <div class="container" style="background: #368e64;width:100%">
      <div class="row v-center"  style="margin-top:150px;">
        <div class="col-xs-12 col-md-12" style="text-align:center;font-size:35px;margin-top:80px;">
          @lang('auth.span1')
        </div>
        <div class="col-xs-12 col-md-12" style="text-align:center;margin-top:70px;color:#000">
          <button class="btn btn-lg" onclick="location.href='/home'" style="background:#ffffff;padding:10px 26px;width:300px;font-weight:bold;color:#368e64">@lang('auth.getwallet')</button>
        </div>
        <div class="col-xs-12 col-md-12" style="text-align:center;font-size:35px;padding-top:80px">
            <div class="col-xs-3 col-md-3"></div>
            <div class="col-xs-6 col-md-6">
              <div class="row">
                <div class="col-sm-6" style="margin-top:30px;">
                  <img src="/img/icon-big-lock.png" alt="Improved security"/>
                  <h3 style="margin-top:15px;">@lang('auth.span2')</h3>
                </div>
                <div class="col-sm-6" style="margin-top:30px;">
                  <img src="/img/icon-big-login.png" alt="Quick login"/>
                  <h3 style="margin-top:15px;">@lang('auth.span3')</h3>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </header>
  @endsection
