@extends('layouts.app')

@section('content')
<section role="main" class="content-body" style="background:white">
  <header class="page-header">
    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <h2>My Wallet</h2>
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
<div class="row">
  <ul class="nav nav-tabs" style="padding-top:40px; padding-left:10px">
    <li class="active"><a href="#all">All</a></li>
    <li><a href="#sent">Sent</a></li>
    <li><a href="#received">Received</a></li>
    <div class="input-group input-search" style="width:250px;float:right;padding-bottom:10px;margin-right:10px">
      <input type="text" class="form-control" name="query" id="query" placeholder="Search..." value="">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" style="height:40px"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </ul>

  <div class="tab-content"  style="padding:10px 20px">
    <div id="all" class="tab-pane fade in active">
      <div class="row" style="border:1px solid #ddd;padding:10px">
        <div class="col-sm-3">
          <h4>Received</h4>
          <p>2018-08-01 12:02:30</p>
        </div>
        <div class="col-sm-3">
          <p>To:My CampusCoin Wallet</p>
          <p>From:12R5wcyyFcqbJZHh4A1Jzp8FxkPHx8ozpJ</p>
        </div>
        <div class="col-sm-3" style="text-align:center">
          <a href="#">Add a description <i class="fa fa-pencil"></i></a>
        </div>
        <div class="col-sm-3" style="text-align:right">
          <button id="btn-amount" class="btn btn-primary" style="width:150px; height:46px;background:#368e64; border-color:#368e64;color:white;" onclick="clickAmount()">1000 CMPCO</button>
        </div>
      </div>
    </div>
    <div id="sent" class="tab-pane fade">

    </div>
    <div id="received" class="tab-pane fade">
      <div class="row" style="border:1px solid #ddd;padding:10px">
        <div class="col-sm-3">
          <h4>Received</h4>
          <p>2018-08-01 12:02:30</p>
        </div>
        <div class="col-sm-3">
          <p>To:My CampusCoin Wallet</p>
          <p>From:12R5wcyyFcqbJZHh4A1Jzp8FxkPHx8ozpJ</p>
        </div>
        <div class="col-sm-3" style="text-align:center">
          <a href="#">Add a description <i class="fa fa-pencil"></i></a>
        </div>
        <div class="col-sm-3" style="text-align:right">
          <button id="btn-amount" class="btn btn-primary" style="width:150px; height:46px;background:#368e64; border-color:#368e64;color:white;" onclick="clickAmount()">1000 CMPCO</button>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
function clickAmount(){
  var btn_text = document.getElementById('btn-amount').innerHTML;
  if (btn_text.includes('CMPCO')){
    btn_text = '$20.0';
  } else {
    btn_text = '1000 CMPCO';
  }
  document.getElementById('btn-amount').innerHTML = btn_text;
}
</script>
@endsection
-
