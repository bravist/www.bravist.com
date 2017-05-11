@extends('layouts.admin.auth.app')
@section('content')
	<div class="register-box-body">
            <p class="login-box-msg">注册一个管理员</p>

            <form action="{{ route('register.admin') }}" method="post">
                {{ csrf_field() }}
                
                <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
                    <input type="text" name="username" class="form-control" placeholder="用户名" value="{{ old('username') }}">
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback  {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" name="email" class="form-control" placeholder="邮箱" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
               
                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="密码">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                
                <div class="form-group has-feedback">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="重复密码">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12 col-md-12">
                        <button type="submit" class="btn btn-primary btn-block">注册</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="{{ route('login.admin') }}" class="text-center">已有账号？点击这里登录</a>
        </div>
@endsection