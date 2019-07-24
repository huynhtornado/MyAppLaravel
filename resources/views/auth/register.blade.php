<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ trans('global.register') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css" rel="stylesheet" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            {{ trans('global.title_form') }}
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">
                {{ trans('global.register') }}
            </p>
            <form method="POST" action="{{ route('register.create') }}">
                {{ csrf_field() }}
                <div>
                    <div class="form-group has-feedback">
                        <input type="text" name="name" class="form-control" required="required"="autofocus"
                            placeholder="Name">
                        @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" required="required"
                            placeholder="Password">
                        @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="password_confirmation" class="form-control" required="required"
                            placeholder="Password confirmation">
                        @if($errors->has('password_confirmation'))
                        <p class="help-block">
                            {{ $errors->first('password_confirmation') }}
                        </p>
                        @endif
                    </div>
                    <div class="form-group has-feedback">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="radio" name="sex_id" value="1" checked>
                                Male
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="sex_id" value="0">
                                Female
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