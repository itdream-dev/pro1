@extends('layouts.app')

@section('content')

<section role="main" class="content-body" style="background:white">
  <header class="page-header">
    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <h2>Dashboard </h2>
        </div>
        <div class="row" style="">
          <button class="btn btn-default" data-toggle="modal" data-target="#sendModal">Send</button>
          <button class="btn btn-default" data-toggle="modal" data-target="#receiveModal">Request</button>
        </div>
      </div>
      <div class="col-sm-6" style="padding-right:25px;text-align:right;padding-top:15px">
        <p>Your Balance</p>
        <p>{{$balance}} CMPCO</p>
      </div>
    </div>
  </header>

  <div class="row" style="padding-top:30px">
    <div class="col-sm-6" style="padding-right:20px">
      <div class="row" style="border:1px solid #ddd;">
        <h3 style="padding-left:20px">Your Balance</h3>
        <div class="col-sm-12" style="text-align:center;font-size:35px;color:#165e3c;height:225px; padding-top:100px">
          {{$balance}} CMPCO = $<span id="cmpco_dollar_balance"></span>
        </div>
      </div>
    </div>
    <div class="col-sm-6" style="padding-left:20px">
      <div class="row" style="border:1px solid #ddd;padding-top:20px;padding-left:20px">
        <div class="col-sm-6" style="text-align:left">BTC PRICE:</div>
        <div class="col-sm-6 btc-price" style="text-align:right"></div>
      </div>
      <div class="row" style="border:1px solid #ddd;padding-top:20px;padding-left:20px">
        <div class="col-sm-6" style="text-align:left">ETH PRICE:</div>
        <div class="col-sm-6 eth-price" style="text-align:right"></div>
      </div>
      <div class="row" style="border:1px solid #ddd;padding-top:20px;padding-left:20px">
        <div class="col-sm-6" style="text-align:left">CMPCO PRICE:</div>
        <div class="col-sm-6 cmpco-price" style="text-align:right"></div>
      </div>
    </div>
    <div class="col-sm-6" style="padding-top:10px;padding-left:20px">
      <div class="row" style="border:1px solid #ddd;padding-top:20px;padding-left:20px">
        <h3>Get Mobile App</h3>
        <p>Download our mobile app on your Android or iOS device to use your wallet on the go.</p>
        <a href="#download" style="color:#10ADE4">Download</a>
      </div>
    </div>

    <div class="col-sm-12" style="padding-top:10px;padding-right:20px">
      <div class="row" style="border:1px solid #ddd;padding-top:20px;padding-left:20px">
        <h3>Recent Activity</h3>
        <table class="table table-hover">
          <thead>
            <th>Date</th>
            <th>Action</th>
            <th>Amount</th>
          </thead>
          <tbody>
            <!-- <tr>
              <td>2018-07-12 14:15</td>
              <td>Received CMPCO</td>
              <td>1000 CMPCO</td>
            </tr> -->
          </tobdy>
        </table>
      </div>
    </div>

  </div>
  </section>
  <script>
  $(document).ready(function(){
    jQuery.get('https://api.coinmarketcap.com/v1/ticker/ethereum/', function(data, status){
      $('.eth-price').html('$' + parseFloat(data[0].price_usd).toFixed(2));
    });

    jQuery.get('https://api.coinmarketcap.com/v1/ticker/bitcoin/', function(data, status){
      btc_price = data[0].price_usd;
      $('.btc-price').html('$' + parseFloat(data[0].price_usd).toFixed(2));

      jQuery.get('https://www.cryptopia.co.nz/api/GetMarkets', function(data, status){
        var LastPrice = 0;
        data = data.Data;
        for (i in data){
          if (data[i]['Label'] == "CMPCO/BTC"){
            LastPrice = data[i]['LastPrice'];
          }
        }
        Price = LastPrice * btc_price;
        console.log(Price);
        dollar_balance = Price * parseFloat("{{$balance}}");
        $('#cmpco_dollar_balance').html(dollar_balance.toFixed(2));
        $('.cmpco-price').html('$' + parseFloat(Price).toFixed(8));
      });
    });
  });
  </script>
  @endsection
