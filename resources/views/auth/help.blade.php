@extends('layouts.back_login')
@section('content')
<div class="container" style="padding-top:200px">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="padding:0px 20px">
                <div class="panel-heading" style="background-color:white;padding-top:25px">
                  <div class="row">
                    <h2 style="display:inline">@lang('auth.span16')</h2>
                  </div>
                  <div class="row">
                    <h6 style="display:inline">@lang('auth.span4')</h6>
                  </div>
                </div>

                <div class="panel-body" style="padding:0px; margin:0px">
                  <div class="row" style="padding:20px 0px;margin:0px;border-bottom:1px solid transparent; border-color:#ddd">
                    <div class="col-sm-9" style="padding-left:0px;">
                      <div class="row" style="padding:0px;margin:0px">
                        <h3>@lang('auth.span5')</h3>
                      </div>
                      <div class="row" style="padding:0px;margin:0px">
                        <h6>@lang('auth.span6')</h6>
                      </div>
                    </div>
                    <div class="col-sm-3" style="padding-top:10px;padding-right:0px;">
                      <button class="btn btn-default">@lang('auth.span7')</button>
                    </div>
                  </div>
                  <!-- <div class="row" style="padding:20px 0px;margin:0px;border-bottom:1px solid transparent; border-color:#ddd">
                    <div class="col-sm-9" style="padding-left:0px;">
                      <div class="row" style="padding:0px;margin:0px">
                        <h3>I've lost my Wallet Password.</h3>
                      </div>
                      <div class="row" style="padding:0px;margin:0px">
                        <h6>Recover your funds with your 12 word recovery passphrase</h6>
                      </div>
                    </div>
                    <div class="col-sm-3" style="padding-top:10px;padding-right:0px;padding-left:0px">
                      <button class="btn btn-default">@lang('auth.welcome_back')Recover Funds</button>
                    </div>
                  </div> -->
                  <div class="row" style="padding:20px 0px;margin:0px;border-bottom:1px solid transparent; border-color:#ddd">
                    <div class="col-sm-9" style="padding-left:0px;">
                      <div class="row" style="padding:0px;margin:0px">
                        <h3>@lang('auth.span9')</h3>
                      </div>
                      <div class="row" style="padding:0px;margin:0px">
                        <h6>@lang('auth.span10')</h6>
                      </div>
                    </div>
                    <div class="col-sm-3" style="padding-top:10px;padding-right:0px;">
                      <button class="btn btn-default">@lang('auth.span11')</button>
                    </div>
                  </div>
                  <div class="row" style="padding:20px 0px;margin:0px;border-bottom:1px solid transparent; border-color:#ddd">
                    <div class="col-sm-6" style="padding-left:0px;text-align:left">
                      <a href="/login" style="color:#10ADE4">@lang('auth.span12')</a>
                    </div>
                    <div class="col-sm-6" style="padding-right:0px;text-align:right">
                      <a href="/contact" style="color:#10ADE4">@lang('auth.span13')</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
