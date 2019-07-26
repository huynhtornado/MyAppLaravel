<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ trans('global.login') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ trans('global.style_login') }}" rel="stylesheet" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo" style="font-size: 500; font-weight: bold;">
            {{ trans('global.title_form') }}
        </div>
        <div class="login-box-body">
            <p class="login-box-msg" style="font-size: 200; font-weight: bold;">
                {{ trans('global.login') }}
            </p>
            @if(session('message'))
                <p class="alert alert-info">
                    {{ session('message') }}
                </p>
            @endif
            <form role="form" method="POST" action="{{ route('postlogin') }}">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                    @if($errors->has('email'))
                        <p class="help-block" style="color: red;">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Password">
                    @if($errors->has('password'))
                        <p class="help-block" style="color: red;">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox">
                            <label><input type="checkbox" name="remember" value="{{ trans('global.remember_me')}}">{{ trans('global.remember_me')}}</label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.login')}}
                        </button>
                    </div>
                </div>
                
            </form>
            <a href="{{ route('password.request') }}">
                {{ trans('global.forgot_password')}}
            </a>
            <a href="{{ route('register') }}">
                {{ trans('global.register')}}
            </a>

        </div>
    </div>
</body>
</html>