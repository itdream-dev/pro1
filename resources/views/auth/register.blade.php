@extends('layouts.back_register')
@section('content')

<style>
@media only screen and (max-width: 1500px) {

}

.content {
  padding-top:120px !important;
}

#country-list {
  list-style:none;
  padding-left:0px;
}

#country-list li {
  padding-left: 20px;
  border-bottom:1px solid #368e64;
  /* border-right:1px solid #368e64;
  border-left:1px solid #368e64; */
}
</style>
@if ($errors->has('email') || $errors->has('password'))
<div id="step0" class="step content container" style="margin-top:150px">
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-default" style="padding:0px 20px">
              <div class="panel-body" style="padding-top:30px">
                      <div class="form-group">
                          <label for="login" class="col-md-12 control-label" style="text-align:center;font-size:20px;font-weight:400;margin-bottom:10px">Sign up Failed! </label>
                          @if ($errors->has('email'))
                              <span class="help-block" style="text-align:center">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                          <div class="row" style="padding-top:30px">
                          <div class="col-md-6" style="text-align:right;padding-right:10px">
                            <button class="btn btn-primary" style="width:150px; background:#368e64; border-color:#368e64; height:40px" onclick="retry(1)">
                                Retry
                            </button>
                          </div>
                          <div class="col-md-6" style="text-align:left;padding-left:10px">
                            <button class="btn btn-primary" style="width:150px;background:#368e64; border-color:#368e64; height:40px" onclick="retry(0)">
                                Cancel
                            </button>
                          </div>
                          </div>
                      </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endif
@if (!$errors->has('email') && !$errors->has('password'))
<div id="step1" class="step content container" style="margin-top:150px">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="padding:0px 20px">
                <div class="panel-body" style="padding-top:30px">
                        <div class="form-group">
                            <label for="login" class="col-md-12 control-label" style="text-align:center;font-size:20px;font-weight:400">Are you a current student or alumni?</label>
                            <div class="row" style="padding-top:60px">
                            <div class="col-md-6" style="text-align:right;padding-right:10px">
                              <button class="btn btn-primary" style="width:150px; background:#368e64; border-color:#368e64; height:40px" onclick="goStep2(1)">
                                  Yes
                              </button>
                            </div>
                            <div class="col-md-6" style="text-align:left;padding-left:10px">
                              <button class="btn btn-primary" style="width:150px;background:#368e64; border-color:#368e64; height:40px" onclick="goStep2(0)">
                                  No
                              </button>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div id="step2" class="step content container" style="padding-top:100px; display:none">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="padding:0px 20px">
                <div class="panel-heading" style="background-color:white;padding-top:25px">
                  <h2 style="display:inline">Create your wallet!</h2>
                  <span style="display:inline;float:right"><span>or</span>&nbsp;<a href="/login" style="color:#10ADE4">Login</a></span>
                </div>

                <div class="panel-body">
                    <form id="form_step_2">
                        <div class="form-group">
                            <label for="name" class="col-md-12 control-label" style="text-align:left">Full Name</label>
                            <div class="col-md-12">
                                <input id="name_field" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="school" class="col-md-12 control-label" style="text-align:left">School</label>
                            <div class="col-md-12">
                               <div class="frmSearch">
                                  <input class="form-control" type="text" id="search-box" placeholder="School Name" style="margin-bottom:0px"/>
                                  <div id="suggesstion-box" style="background: #eee"></div>
                               </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="country" class="col-md-12 control-label" style="text-align:left;margin-top:20px">Country</label>
                            <div class="col-md-12">
                                <select id="countries" onchange="selectCountry(this.value)">

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="state" class="col-md-12 control-label" style="text-align:left;margin-top:20px">State/Province</label>
                            <div class="col-md-12">
                              <select id="states" onchange="selectState(this.value)">

                              </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="city" class="col-md-12 control-label" style="text-align:left;margin-top:20px">City</label>
                            <div class="col-md-12">
                              <select id="cites">
                              </select>
                            </div>
                        </div>

                        <div class="form-group"  style="">
                            <label for="address1" class="col-md-12 control-label" style="text-align:left;margin-top:20px">Street Address Line1</label>
                            <div class="col-md-12">
                                <input id="address1_field" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address2" class="col-md-12 control-label" style="text-align:left">Street Address Line2</label>
                            <div class="col-md-12">
                                <input id="address2_field" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="post_code" class="col-md-12 control-label" style="text-align:left">Postal Code</label>
                            <div class="col-md-12">
                                <input id="post_code_field" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone_number" class="col-md-12 control-label" style="text-align:left">Phone Number</label>
                            <div class="col-md-12">
                                <input id="phone_number_field" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="login" class="col-md-12 control-label" style="text-align:left"></label>
                            <div class="col-md-12">
                              <button class="btn btn-primary" type="submit" style="width:100%; background:#368e64; border-color:#368e64; height:40px">
                                  Continue
                              </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="step3" class="step content container" style="padding-top:200px; display:none">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="padding:0px 20px">
                <div class="panel-heading" style="background-color:white;padding-top:25px">
                  <h2 style="display:inline">Create your wallet!</h2>
                  <span style="display:inline;float:right"><span>or</span>&nbsp;<a href="/login" style="color:#10ADE4">Login</a></span>
                </div>



                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">

                        {{ csrf_field() }}
                        <input id="is_student_or_alumni" type="hidden" name="is_student_or_alumni">
                        <input id="address1" type="hidden" name="address1">
                        <input id="address2" type="hidden" name="address2">
                        <input id="city" type="hidden" name="city">
                        <input id="state" type="hidden" name="state">
                        <input id="country" type="hidden" name="country">
                        <input id="post_code" type="hidden" name="post_code">
                        <input id="mobile_number" type="hidden" name="mobile_number">
                        <input id="school_name" type="hidden" name="school_name">
                        <div class="form-group{{ $errors->has('wallet_id') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label" style="text-align:left">Email</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label" style="text-align:left">New Password</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label" style="text-align:left">Confirm Password</label>
                            <div class="col-md-12">
                                <input id="confirm-password" type="password" class="form-control" name="password_confirmation" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label" style="text-align:left; color:#368e64">Are you 13 years old or older?</label>
                            <div class="col-md-12">
                              <div class="form-check form-check-inline" style="display:inline">
                                  <input class="form-check-input" type="radio" id="inlineCheckbox1" name="is_more_than_13_years" value="1" checked>
                                  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                              </div>
                              <div class="form-check form-check-inline" style="display:inline; margin-left:20px">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="is_more_than_13_years" value="0">
                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="login" class="col-md-12 control-label" style="text-align:left"></label>
                            <div class="col-md-12">
                              <div class="checkbox-custom checkbox-default">
            										<input id="term_check" name="term_check" type="checkbox" required/>
            										<label for="term_check">I Accept the Terms and Conditions.</label>
            									</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="login" class="col-md-12 control-label" style="text-align:left"></label>
                            <div class="col-md-12">
                              <button type="submit" class="btn btn-primary" style="width:100%; background:#368e64; border-color:#368e64; height:40px">
                                  Register
                              </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>.

<script>
var is_student_or_alumni = 0;
var set_text = "";
function step(stepid){
  $('.step').hide();
  $('#step'+stepid).show();
}



$('#form_step_2').submit(function(event){
  event.preventDefault();
  event.stopPropagation();

  $('#is_student_or_alumni').val(is_student_or_alumni);
  school_name = $('#school_name_field').val();
  if (is_student_or_alumni){
    if (school_name == '') {
      return;
    }
  }

  $('#school_name').val($('#school_name_field').val());
  $('#address1').val($('#address1_field').val());
  $('#address2').val($('#address2_field').val());
  $('#city').val($('#city_field').val());
  $('#state').val($('#state_field').val());
  $('#country').val($('#country_field').val());
  $('#post_code').val($('#post_code_field').val());
  $('#mobile_number').val($('#mobile_number_field').val());
  step(3);
});

function goStep2(res){
  is_student_or_alumni = res;
  console.log('is_student_or_alumni', is_student_or_alumni);
  if (!is_student_or_alumni) {
    $('#search-box').attr('disabled', true);
  } else {
    $('#search-box').attr('required', true);
  }
  step(2);
}

function goStep3(){
  $('#is_student_or_alumni').val(is_student_or_alumni);
  school_name = $('#school_name_field').val();
  if (is_student_or_alumni){
    if (school_name == '') {
      return;
    }
  }

  $('#school_name').val($('#school_name_field').val());
  $('#address1').val($('#address1_field').val());
  $('#address2').val($('#address2_field').val());
  $('#city').val($('#city_field').val());
  $('#state').val($('#state_field').val());
  $('#country').val($('#country_field').val());
  $('#post_code').val($('#post_code_field').val());
  $('#mobile_number').val($('#mobile_number_field').val());
  step(3);
}

function RefreshCites(state_id){
  data = {
    state_id: state_id
  };
  $.post('/getCites', data, function(res, status){
    html = '';
    for (i in res){
      html = html + '<option value="' + res[i].id + '">' + res[i].name + '</option>';
    }
    $('#cites').html(html);
  });
}

function RefreshStates(country_id){
  data = {
    country_id: country_id
  };
  $.post('/getStates', data, function(res, status){

    html = '';
    data = {};
    if (res.length > 0){
      for (i in res){
        html = html + '<option value="' + res[i].id + '">' + res[i].name + '</option>';
      }
      data.state_id = res[0].id;
      $.post('/getCites', data, function(res, status){
        console.log(res);
        html = '';
        for (i in res){
          html = html + '<option value="' + res[i].id + '">' + res[i].name + '</option>';
        }
        $('#cites').html(html);
      });
    }
    $('#states').html(html);
  });
}

function selectState(val){
  RefreshCites(val);
}

$(document).ready(function(){
  data = {};
  $.post('/getCountries', data, function(res, status){
    console.log(res);
    html = '';
    for (i in res){
      html = html + '<option value="' + res[i].id + '">' + res[i].name + '</option>';
    }
    $('#countries').html(html);
    country_id = $('#countries').val();
    RefreshStates(country_id);
  });

	$("#search-box").keyup(function(){
  query = $(this).val();
  // console.log(query);
  // if (set_text == query) {
  //   set_text = "";
  //   return;
  // }
  if (query != ""){
  $.ajax({
  type: "GET",
  url: "http://108.161.151.117:5000/search",
  data:{name: query},
  crossDomain: true,
  beforeSend: function(){
    $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 410px");
  },
  success: function(data){
    data = JSON.parse(data);
    console.log('data', data[0]);
    current_str = $("#search-box").val();
    if (current_str != ''){
      if (data.length > 0){
        res = '<ul id="country-list">';
        for (i in data){
          res = res + '<li onClick="selectSchool(\'' + data[i].name +'\')">'+ data[i].name + '</li>';
          if (i > 20) break;
        }
        res = res + '</ul>';
      }
      $("#suggesstion-box").html(res);
      $("#suggesstion-box").show();
      $("#search-box").css("background","#FFF");
    } else {
      $("#suggesstion-box").html('');
      $("#suggesstion-box").hide();
    }
  }
  });
} else {
  $("#suggesstion-box").html("");
  $("#search-box").css("background","#FFF");
}

});
});


function selectCountry(val) {
  RefreshStates(val);
}

function selectSchool(val) {
  console.log('click', val);
  set_text = val;
  $("#search-box").val(val);
  $("#suggesstion-box").hide();
}

function retry(val){
  if (val == 1){
    location.href = '/register';
  } else {
    location.href = '/home';
  }
}
</script>
@endsection
