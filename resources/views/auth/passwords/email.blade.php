<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ trans('global.forgot_Password') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">
                {{ trans('global.title_form') }}
            </a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">
                {{ trans('global.reset_password') }}
            </p>
            <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div>
                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" required="required"="autofocus"
                            placeholder="Email">
                        @if($errors->has('email'))
                            <p>
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-6">

                        </div>
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ trans('global.reset_password') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>