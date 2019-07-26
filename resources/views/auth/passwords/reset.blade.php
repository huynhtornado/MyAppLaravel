<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Larashop Admin | Password Reset</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
        rel="stylesheet" />
    <link href="{{ trans('global.style_login') }}" rel="stylesheet" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">
                {{ trans('global.title_form') }}
            </a>
        </div>
        <div class="login-box-body">
            @if(session('message'))
            <p class="alert alert-danger">
                {{ session('message') }}
            </p>
            @endif
            <form role="form" method="POST" action="{{ route('password.resetagain') }}">
                <h3 style="text-align:center;">Reset Password</h3>

                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                    @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                    @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password_confirmation" class="form-control" id="password_confirmation"
                        name="password_confirmation" placeholder="Confirm Password" />
                    @if ($errors->has('password_confirmation'))
                    <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                    @endif
                </div>
                <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">
                                {{ trans('global.reset_password') }}
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>