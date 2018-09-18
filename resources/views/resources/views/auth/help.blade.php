@extends('layouts.back_login')
@section('content')
<div class="container" style="padding-top:200px">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="padding:0px 20px">
                <div class="panel-heading" style="background-color:white;padding-top:25px">
                  <div class="row">
                    <h2 style="display:inline">Login Help</h2>
                  </div>
                  <div class="row">
                    <h6 style="display:inline">Need help accessing your wallet?</h6>
                  </div>
                </div>

                <div class="panel-body" style="padding:0px; margin:0px">
                  <div class="row" style="padding:20px 0px;margin:0px;border-bottom:1px solid transparent; border-color:#ddd">
                    <div class="col-sm-9" style="padding-left:0px;">
                      <div class="row" style="padding:0px;margin:0px">
                        <h3>I've lost my Wallet ID.</h3>
                      </div>
                      <div class="row" style="padding:0px;margin:0px">
                        <h6>Email me a reminder with my Wallet ID to my email address</h6>
                      </div>
                    </div>
                    <div class="col-sm-3" style="padding-top:10px;padding-right:0px;">
                      <button class="btn btn-default">Remind me</button>
                    </div>
                  </div>
                  <div class="row" style="padding:20px 0px;margin:0px;border-bottom:1px solid transparent; border-color:#ddd">
                    <div class="col-sm-9" style="padding-left:0px;">
                      <div class="row" style="padding:0px;margin:0px">
                        <h3>I've lost my Wallet Password.</h3>
                      </div>
                      <div class="row" style="padding:0px;margin:0px">
                        <h6>Recover your funds with your 12 word recovery passphrase</h6>
                      </div>
                    </div>
                    <div class="col-sm-3" style="padding-top:10px;padding-right:0px;padding-left:0px">
                      <button class="btn btn-default">Recover Funds</button>
                    </div>
                  </div>
                  <div class="row" style="padding:20px 0px;margin:0px;border-bottom:1px solid transparent; border-color:#ddd">
                    <div class="col-sm-9" style="padding-left:0px;">
                      <div class="row" style="padding:0px;margin:0px">
                        <h3>I've lost my 2FA Device.</h3>
                      </div>
                      <div class="row" style="padding:0px;margin:0px">
                        <h6>Reset two step verification to regain access to your wallet</h6>
                      </div>
                    </div>
                    <div class="col-sm-3" style="padding-top:10px;padding-right:0px;">
                      <button class="btn btn-default">Reset 2FA</button>
                    </div>
                  </div>
                  <div class="row" style="padding:20px 0px;margin:0px;border-bottom:1px solid transparent; border-color:#ddd">
                    <div class="col-sm-6" style="padding-left:0px;text-align:left">
                      <a href="/login" style="color:#10ADE4">Go Back</a>
                    </div>
                    <div class="col-sm-6" style="padding-right:0px;text-align:right">
                      <a href="/contact" style="color:#10ADE4">Contact Support</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
