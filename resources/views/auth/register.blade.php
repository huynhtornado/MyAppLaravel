<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ trans('global.register') }}</title>
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
                {{ trans('global.register') }}
            </p>
            @if(session('message'))
                <p class="alert alert-danger">
                    {{ session('message') }}
                </p>
            @endif
            @if(session('success'))
                <p class="alert alert-success">
                    {{ session('success') }}
                </p>
            @endif
            <form method="POST" action="{{ route('register.create') }}">
                {{ csrf_field() }}
                <div>
                    <div class="form-group has-feedback">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
                        @if($errors->has('name'))
                        <p class="help-block" style="color: red;">
                            {{ $errors->first('name') }}
                        </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                        @if($errors->has('email'))
                        <p class="help-block" style="color: red;">
                            {{ $errors->first('email') }}
                        </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        @if($errors->has('password'))
                        <p class="help-block" style="color: red;">
                            {{ $errors->first('password') }}
                        </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password confirmation">
                        @if($errors->has('password_confirmation'))
                        <p class="help-block" style="color: red;">
                            {{ $errors->first('password_confirmation') }}
                        </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <div class="row">
                            <div class="col-md-4">
                                <label>
                                    <input type="radio" name="gender" value="1" checked>
                                    Male
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label>
                                    <input type="radio" name="gender" value="0">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">

                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ trans('global.register') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>