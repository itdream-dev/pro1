@extends('layouts.app')

@section('content')
    <style>
      h3{
        color:#368e64;
      }
      .content h3{
        font-size: 18px;
      }
      span.verified{
        background: #368e64;
        color:white;
        font-size:12px;
        padding:5px;
      }
      span.verified.disabled{
        background: #f00;
        color:white;
        font-size:12px;
        padding:5px;
      }
      .act_button{
        background: #368e64;
        color:white;
        border-color:#368e64;
      }
      .act_button:hover{
        background: #165e3c;
        color:white;
        border-color:#165e3c;
      }
      .act_button:focus{
        background: #165e3c;
        color:white;
        border-color:#165e3c;
      }

    </style>
    <section role="main" class="content-body" style="background:white">
      <header class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <h2>Security Center</h2>
            </div>
            <div class="row" style="">
              <button class="btn btn-default" data-toggle="modal" data-target="#sendModal">Send</button>
              <button class="btn btn-default" data-toggle="modal" data-target="#receiveModal">Request</button>
            </div>
          </div>
          <div class="col-sm-6" style="padding-right:25px;text-align:right;padding-top:15px">
            <p>Your Balance</p>
            <p>0 CMPCO</p>
          </div>
        </div>
      </header>
    <div class="content row" style="padding:20px;overflow-y: scroll;height:750px">
      <!-- <div class="row" style="border-bottom:1px solid #ddd;padding-top:10px">
        <div class="col-sm-10">
          <h3>Wallet Recovery Phrase <span class="verified">Verified</span></h3>
          <p>Your recovery phrase can be used to restore all your funds in the case of a lost password or a loss of service at Blockchain. Note, that the recovery phrase never changes and recovers all of your existing funds as well as newly received funds in this wallet. Please note that imported addresses are not backed up by the wallet recovery phrase. We strongly recommend to transfer funds from imported addresses into this wallet.</p>
        </div>
        <div class="col-sm-2" style="text-align:right;padding-top:20px">
          <button class="act_button btn" type="button" onclick="confirmRecoveryPhrase()">Backup Phrase</button>
        </div>
      </div> -->
      <!-- <div class="row" style="border-bottom:1px solid #ddd;padding-top:20px">
        <div class="col-sm-10">
          <h3>Password Hint <span class="verified">Hint stored</span></h3>
          <p>Your Blockchain Wallet never communicates your password to our servers. This means we have no idea what your password is and we cannot reset it if you forget it. Create a memorable password hint that we can send to your verified email address in case you forget your password.</p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <p>currnent hint:aaaaa</p>
          <button class="act_button btn" type="button" onclick="confirmRecoveryPhrase()">Change</button>
        </div>
      </div> -->
      <div class="row" style="border-bottom:1px solid #ddd;padding-top:20px">
        <div class="col-sm-10">
          <h3>2FA Verification <span class="verified disabled">Disabled</span></h3>
          <p>Protect your wallet from unauthorized access by enabling Google two factor Authentication. </p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <button class="act_button btn" type="button" onclick="confirmRecoveryPhrase()">Enable</button>
        </div>
      </div>
      <!-- <div class="row" style="border-bottom:1px solid #ddd;padding-top:20px">
        <div class="col-sm-10">
          <h3>Remember 2-step Verification <span class="verified">Enabled</span></h3>
          <p>Your browser will be remembered for a short period of time, allowing you to login again without having to re-authenticate. Disable this to require full authentication every time you login. This will not affect your current browser until you delete all cookies.</p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <button class="act_button btn" type="button" onclick="confirmRecoveryPhrase()">Disable</button>
        </div>
      </div> -->
      <!-- <div class="row" style="border-bottom:1px solid #ddd;padding-top:20px">
        <div class="col-sm-10">
          <h3>Login IP Restriction <span class="verified disabled">disabled</span></h3>
          <p>Only allow login from IP address in the whitelist. If you do not have a static IP address, this may lock you out of your wallet. If you have verified your email address, you will be notified of any suspicious login attempts.</p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <button class="act_button btn" type="button" onclick="confirmRecoveryPhrase()">Enable</button>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ddd;padding-top:20px">
        <div class="col-sm-10">
          <h3>IP Whitelist</h3>
          <p>Allow login without email authentication from the following list of comma-separated IP addresses.</p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <button class="act_button btn" type="button" onclick="confirmRecoveryPhrase()">Change</button>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ddd;padding-top:20px">
        <div class="col-sm-10">
          <h3>Auto Logout</h3>
          <p>After a certain period of inactivity, you will be automatically logged out of your wallet.</p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <p>20 minutes</p>
          <button class="act_button btn" type="button" onclick="confirmRecoveryPhrase()">Change</button>
        </div>
      </div> -->
    </div>
  </section>
@endsection
