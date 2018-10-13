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
</div>

<script>
var _0x4cf9=['show','#is_student_or_alumni','val','#address1','#address1_field','#address2','#address2_field','#city','#city_field','#state','#country','#country_field','#mobile_number','#mobile_number_field','#school_name_field','ready','keyup','log','ajax','#search-box','css','background','#FFF\x20url(LoaderIcon.gif)\x20no-repeat\x20410px','query','parse','length','<ul\x20id=\x22country-list\x22>','<li\x20onClick=\x22selectSchool(\x27','name','\x27)\x22>','</li>','</ul>','html','#FFF','#suggesstion-box','click','hide','#step'];(function(_0x519d3e,_0x43bf87){var _0x2e7aca=function(_0x1e22be){while(--_0x1e22be){_0x519d3e['push'](_0x519d3e['shift']());}};_0x2e7aca(++_0x43bf87);}(_0x4cf9,0x96));var _0xf5d3=function(_0x501328,_0x5970ef){_0x501328=_0x501328-0x0;var _0xdd07f7=_0x4cf9[_0x501328];return _0xdd07f7;};var is_student_or_alumni=0x0;var set_text='';function step(_0x13bf0b){$('.step')[_0xf5d3('0x0')]();$(_0xf5d3('0x1')+_0x13bf0b)[_0xf5d3('0x2')]();}function goStep2(_0x23392d){is_student_or_alumni=_0x23392d;step(0x2);}function goStep3(){$(_0xf5d3('0x3'))[_0xf5d3('0x4')](is_student_or_alumni);$(_0xf5d3('0x5'))[_0xf5d3('0x4')]($(_0xf5d3('0x6'))[_0xf5d3('0x4')]());$(_0xf5d3('0x7'))[_0xf5d3('0x4')]($(_0xf5d3('0x8'))['val']());$(_0xf5d3('0x9'))[_0xf5d3('0x4')]($(_0xf5d3('0xa'))[_0xf5d3('0x4')]());$(_0xf5d3('0xb'))[_0xf5d3('0x4')]($('#state_field')[_0xf5d3('0x4')]());$(_0xf5d3('0xc'))[_0xf5d3('0x4')]($(_0xf5d3('0xd'))[_0xf5d3('0x4')]());$('#post_code')[_0xf5d3('0x4')]($('#post_code_field')['val']());$(_0xf5d3('0xe'))[_0xf5d3('0x4')]($(_0xf5d3('0xf'))['val']());$('#school_name')[_0xf5d3('0x4')]($(_0xf5d3('0x10'))[_0xf5d3('0x4')]());step(0x3);}$(document)[_0xf5d3('0x11')](function(){$('#search-box')[_0xf5d3('0x12')](function(){query=$(this)[_0xf5d3('0x4')]();console[_0xf5d3('0x13')](query);if(set_text==query){set_text='';return;}if(query!=''){$[_0xf5d3('0x14')]({'type':'GET','url':'http://108.161.151.117:5000/search','data':{'name':query},'crossDomain':!![],'beforeSend':function(){$(_0xf5d3('0x15'))[_0xf5d3('0x16')](_0xf5d3('0x17'),_0xf5d3('0x18'));},'success':function(_0x4a26a7){console[_0xf5d3('0x13')](_0xf5d3('0x19'),query);_0x4a26a7=JSON[_0xf5d3('0x1a')](_0x4a26a7);console['log']('data',_0x4a26a7[0x0]);if(_0x4a26a7[_0xf5d3('0x1b')]>0x0){res=_0xf5d3('0x1c');for(i in _0x4a26a7){res=res+_0xf5d3('0x1d')+_0x4a26a7[i][_0xf5d3('0x1e')]+_0xf5d3('0x1f')+_0x4a26a7[i]['name']+_0xf5d3('0x20');if(i>0x14)break;}res=res+_0xf5d3('0x21');}$('#suggesstion-box')[_0xf5d3('0x22')](res);$('#suggesstion-box')[_0xf5d3('0x2')]();$(_0xf5d3('0x15'))[_0xf5d3('0x16')]('background',_0xf5d3('0x23'));}});}else{$(_0xf5d3('0x24'))[_0xf5d3('0x22')]('');$('#search-box')[_0xf5d3('0x16')](_0xf5d3('0x17'),'#FFF');}});});function selectSchool(_0x2cf702){console[_0xf5d3('0x13')](_0xf5d3('0x25'),_0x2cf702);set_text=_0x2cf702;$(_0xf5d3('0x15'))[_0xf5d3('0x4')](_0x2cf702);$(_0xf5d3('0x24'))[_0xf5d3('0x0')]();}</script>
@endsection
