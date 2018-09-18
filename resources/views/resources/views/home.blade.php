@extends('layouts.back')

@section('content')
    <style>
      h3{
        color:#368e64;
      }
    </style>
    <div class="row">
      <div class="col-sm-6" style="padding:30px">
        <div class="row" style="border:1px solid #ddd;padding-top:20px;padding-left:20px">
          <h3>Your Balance</h3>
          <div class="col-sm-12" style="text-align:center;font-size:35px;color:#165e3c;padding:150px;height:400px">
            1000 CMPCO = $20
          </div>
        </div>
      </div>
      <div class="col-sm-6" style="padding:30px">
        <div class="row" style="border:1px solid #ddd;padding-top:20px;padding-left:20px">
          <h3>Price Charts</h3>
          <img src="/img/amCharts.png" style="height:400px"/>
        </div>
      </div>
      <div class="col-sm-6" style="padding:30px">
        <div class="row" style="border:1px solid #ddd;padding-top:20px;padding-left:20px">
          <h3>Recent Activity</h3>
          <table class="table table-hover">
            <thead>
              <th></th>
              <th></th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td>2018-07-12 14:15</td>
                <td>Received CMPCO</td>
                <td>1000 CMPCO</td>
              </tr>
            </tobdy>
          </table>
        </div>
      </div>
      <div class="col-sm-6" style="padding:30px">
        <div class="row" style="border:1px solid #ddd;padding-top:20px;padding-left:20px">
          <h3>Get Mobile App</h3>
          <p>Download our mobile app on your Android or iOS device to use your wallet on the go.</p>
          <a href="#download" style="color:#10ADE4">Download</a>
        </div>
      </div>
    </div>
@endsection
