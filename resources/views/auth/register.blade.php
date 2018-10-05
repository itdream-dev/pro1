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
<div id="step1" class="step content container" style="padding-top:300px">
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
                              <button class="btn btn-primary" style="width:150px;background:#368e64; border-color:#368e64; height:40px" onclick="goStep2(3)">
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
<div id="step2" class="step content container" style="padding-top:100px; display:none">
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
                            <label for="address1" class="col-md-12 control-label" style="text-align:left">Street Address Line1</label>
                            <div class="col-md-12">
                                <input id="address1_field" type="text" class="form-control"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address2" class="col-md-12 control-label" style="text-align:left">Street Address Line2</label>
                            <div class="col-md-12">
                                <input id="address2_field" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-md-12 control-label" style="text-align:left">City</label>
                            <div class="col-md-12">
                                <input id="city_field" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="state" class="col-md-12 control-label" style="text-align:left">State/Province</label>
                            <div class="col-md-12">
                                <input id="state_field" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="country" class="col-md-12 control-label" style="text-align:left">Country</label>
                            <div class="col-md-12">
                                <input id="country_field" type="text" class="form-control" required>
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
                              <button class="btn btn-primary" style="width:100%; background:#368e64; border-color:#368e64; height:40px" onclick="goStep3()">
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
                                  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                                  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                              </div>
                              <div class="form-check form-check-inline" style="display:inline; margin-left:20px">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
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
function step(stepid){
  $('.step').hide();
  $('#step'+stepid).show();
}

function goStep2(res){
  is_student_or_alumni = res;
  step(2);
}

function goStep3(){
  step(3);
}

$(document).ready(function(){
	$("#search-box").keyup(function(){
    query = $(this).val();
		$.ajax({
		type: "POST",
		url: "readschool",
		data:{query: query},
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 455px");
		},
		success: function(data){

      console.log('query', query);

			//$("#suggesstion-box").html(data);
      // $.ajax({
      //   type: "GET",
      //   url: 'http://universities.hipolabs.com/search?name='+query,
      //   success: function (data1){
      //     append_data = '';
      //     for (i in data1){
      //       append_data = append_data + '<li onClick="selectSchool(' + data1[i]['name'] + ');">' + data1[i]['name'] + '</li>';
      //     }
      //     console.log(data1);
      //     $("#suggesstion-box").html(data);
      //     $("#suggesstion-box").append(append_data);
      //     $("#suggesstion-box").show();
      //     $("#search-box").css("background","#FFF");
      //   }
      // });
      // $.get('http://universities.hipolabs.com/search?name='+$(this).val(), function(data1, status){
      //   append_data = '';
      //   for (i in data1){
      //     append_data = append_data + '<li onClick="selectSchool('+ data1[i]['name']+');">' + data1[i]['name'] + '</li>';
      //   }
      //   console.log(data1);
        $("#suggesstion-box").html(data);
        //$("#suggesstion-box").append(append_data);
        $("#suggesstion-box").show();
        $("#search-box").css("background","#FFF");
      // });

		}
		});
	});
});

function selectSchool(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
@endsection
