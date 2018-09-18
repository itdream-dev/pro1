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
              <h2>Settings</h2>
            </div>
            <div class="row" style="">
              <button class="btn btn-default" data-toggle="modal" data-target="#sendModal">Send</button>
              <button class="btn btn-default" data-toggle="modal" data-target="#receiveModal">Request</button>
            </div>
          </div>
          <div class="col-sm-6" style="padding-right:25px;text-align:right;padding-top:15px">
            <p>Your Balance</p>
            <p>1000 CMPCO</p>
          </div>
        </div>
      </header>
    <div class="content row" style="padding:20px;overflow-y: scroll;height:750px">
      <!-- <div class="row" style="border-bottom:1px solid #ddd;padding-top:10px">
        <div class="col-sm-9">
          <h3>Wallet ID <span class="verified">Verified</span></h3>
          <p>Wallet ID is your unique identifier. It is completely individual to you, and it is what you will use to log in and access your wallet. It is not an address for sending or receiving. Do not share your Wallet ID with others.</p>
        </div>
        <div class="col-sm-3" style="text-align:right">
          <p>b8c5816e-46cd-4050-84f7-13eec9082d8b</p>
        </div>
      </div> -->
      <div class="row" style="border-bottom:1px solid #ddd;padding-top:10px">
        <div class="col-sm-10">
          <h3>Email Address <span class="verified">Verified</span></h3>
          <p>Your verified email address is used to send login codes when suspicious or unusual activity is detected, to remind you of your wallet login ID, and to send payment alerts when you receive funds.</p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <p>skyclean906@gmail.com</p>
          <!-- <button class="act_button btn" type="button" onclick="confirmRecoveryPhrase()">Change</button> -->
        </div>
      </div>
      <!-- <div class="row" style="border-bottom:1px solid #ddd;padding-top:10px">
        <div class="col-sm-10">
          <h3>Mobile Number <span class="verified disabled">Unverified</span></h3>
          <p>Your mobile phone can be used to enable two-factor authentication, helping to secure your wallet from unauthorized access, and to send payment alerts when you receive funds.</p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <button class="act_button btn" type="button" onclick="confirmRecoveryPhrase()">Change</button>
        </div>
      </div> -->
      <div class="row" style="border-bottom:1px solid #ddd;padding-top:10px">
        <div class="col-sm-10">
          <h3>Wallet Language</h3>
          <p>Set your preferred language.</p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <select id="lang_selector" class="form-control form-control-lg" onchange="onChangeLang();" style="height:45px">
              <option value="en">Bulgarian</option>
              <option value="zh">Chinese Simplified</option>
              <option value="zh">Danish</option>
              <option value="zh">Dutch</option>
              <option value="zh" selected>English</option>
              <option value="zh">French</option>
              <option value="zh">German</option>
              <option value="zh">Greek</option>
              <option value="zh">Hindi</option>
              <option value="zh">Hungarian</option>
              <option value="zh">Indonesian</option>
              <option value="zh">Italiano</option>
              <option value="zh">Japanese</option>
              <option value="zh">Korean</option>
              <option value="zh">Norwegian</option>
              <option value="zh">Polish</option>
              <option value="zh">Portuguese</option>
              <option value="zh">Romanian</option>
              <option value="zh">Russian</option>
              <option value="zh">Slovenian</option>
              <option value="zh">Spanish</option>
              <option value="zh">Swedish</option>
              <option value="zh">Thai</option>
              <option value="zh">Turkish</option>
              <option value="zh">Vietnamese</option>
          </select>
        </div>
      </div>
      <div class="row" style="border-bottom:1px solid #ddd;padding-top:10px">
        <div class="col-sm-10">
          <h3>Fiat Currency</h3>
          <p>Select your local currency or preferred currency.</p>
        </div>
        <div class="col-sm-2" style="text-align:right">
          <select id="lang_selector" class="form-control form-control-lg" onchange="onChangeLang();" style="height:45px">
              <option value="en" selected>USA</option>
              <option value="zh">Euro</option>
              <option value="zh">ISK</option>
              <option value="zh">HKD</option>
              <option value="zh">CNY</option>
              <option value="zh">AUD</option>
              <option value="zh">JPY</option>
              <option value="zh">KRW</option>
          </select>
        </div>
      </div>
    </div>
  </section>
@endsection
