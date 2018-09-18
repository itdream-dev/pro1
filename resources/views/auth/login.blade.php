@extends('layouts.back_login')
@section('content')
<div class="container" style="padding-top:200px">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="padding:0px 20px">
                <div class="panel-heading" style="background-color:white;padding-top:25px">
                  <h2 style="display:inline">@lang('auth.welcome_back')</h2>
                  <span style="display:inline;float:right"><span>or</span>&nbsp;<a href="/register" style="color:#10ADE4">@lang('auth.signup')</a></span>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="wallet_id" class="col-md-12 control-label" style="text-align:left">@lang('auth.email')</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('wallet_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('wallet_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label" style="text-align:left">@lang('auth.password')</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="login" class="col-md-12 control-label" style="text-align:left"></label>
                            <div class="col-md-12">
                              <button type="submit" class="btn btn-primary" style="width:100%; background:#368e64; border-color:#368e64; height:40px">
                                  @lang('auth.login')
                              </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <span style="display:inline;float:right"><span>@lang('auth.span14')</span>&nbsp;<a href="/login_help" style="color:#10ADE4">@lang('auth.span15')</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
