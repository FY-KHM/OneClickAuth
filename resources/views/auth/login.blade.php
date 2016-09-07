@extends('layouts.app')

@section('content')
<head>
    <style type="text/css">
.btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:focus,.btn-facebook.focus{color:#fff;background-color:#2d4373;border-color:rgba(0,0,0,0.2)}
.btn-facebook:hover{color:#fff;background-color:#2d4373;border-color:rgba(0,0,0,0.2)}
.btn-facebook:active,.btn-facebook.active,.open>.dropdown-toggle.btn-facebook{color:#fff;background-color:#2d4373;border-color:rgba(0,0,0,0.2)}.btn-facebook:active:hover,.btn-facebook.active:hover,.open>.dropdown-toggle.btn-facebook:hover,.btn-facebook:active:focus,.btn-facebook.active:focus,.open>.dropdown-toggle.btn-facebook:focus,.btn-facebook:active.focus,.btn-facebook.active.focus,.open>.dropdown-toggle.btn-facebook.focus{color:#fff;background-color:#23345a;border-color:rgba(0,0,0,0.2)}
.btn-facebook:active,.btn-facebook.active,.open>.dropdown-toggle.btn-facebook{background-image:none}
.btn-facebook.disabled,.btn-facebook[disabled],fieldset[disabled] .btn-facebook,.btn-facebook.disabled:hover,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook:hover,.btn-facebook.disabled:focus,.btn-facebook[disabled]:focus,fieldset[disabled] .btn-facebook:focus,.btn-facebook.disabled.focus,.btn-facebook[disabled].focus,fieldset[disabled] .btn-facebook.focus,.btn-facebook.disabled:active,.btn-facebook[disabled]:active,fieldset[disabled] .btn-facebook:active,.btn-facebook.disabled.active,.btn-facebook[disabled].active,fieldset[disabled] .btn-facebook.active{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}
.btn-github{color:#fff;background-color:#444;border-color:rgba(0,0,0,0.2)}.btn-github:focus,.btn-github.focus{color:#fff;background-color:#2b2b2b;border-color:rgba(0,0,0,0.2)}
.btn-github:hover{color:#fff;background-color:#2b2b2b;border-color:rgba(0,0,0,0.2)}
.btn-github:active,.btn-github.active,.open>.dropdown-toggle.btn-github{color:#fff;background-color:#2b2b2b;border-color:rgba(0,0,0,0.2)}.btn-github:active:hover,.btn-github.active:hover,.open>.dropdown-toggle.btn-github:hover,.btn-github:active:focus,.btn-github.active:focus,.open>.dropdown-toggle.btn-github:focus,.btn-github:active.focus,.btn-github.active.focus,.open>.dropdown-toggle.btn-github.focus{color:#fff;background-color:#191919;border-color:rgba(0,0,0,0.2)}
.btn-github:active,.btn-github.active,.open>.dropdown-toggle.btn-github{background-image:none}
.btn-github.disabled,.btn-github[disabled],fieldset[disabled] .btn-github,.btn-github.disabled:hover,.btn-github[disabled]:hover,fieldset[disabled] .btn-github:hover,.btn-github.disabled:focus,.btn-github[disabled]:focus,fieldset[disabled] .btn-github:focus,.btn-github.disabled.focus,.btn-github[disabled].focus,fieldset[disabled] .btn-github.focus,.btn-github.disabled:active,.btn-github[disabled]:active,fieldset[disabled] .btn-github:active,.btn-github.disabled.active,.btn-github[disabled].active,fieldset[disabled] .btn-github.active{background-color:#444;border-color:rgba(0,0,0,0.2)}
.btn-github .badge{color:#444;background-color:#fff}
.btn-google{color:#fff;background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}.btn-google:focus,.btn-google.focus{color:#fff;background-color:#c23321;border-color:rgba(0,0,0,0.2)}
.btn-google:hover{color:#fff;background-color:#c23321;border-color:rgba(0,0,0,0.2)}
.btn-google:active,.btn-google.active,.open>.dropdown-toggle.btn-google{color:#fff;background-color:#c23321;border-color:rgba(0,0,0,0.2)}.btn-google:active:hover,.btn-google.active:hover,.open>.dropdown-toggle.btn-google:hover,.btn-google:active:focus,.btn-google.active:focus,.open>.dropdown-toggle.btn-google:focus,.btn-google:active.focus,.btn-google.active.focus,.open>.dropdown-toggle.btn-google.focus{color:#fff;background-color:#a32b1c;border-color:rgba(0,0,0,0.2)}
.btn-google:active,.btn-google.active,.open>.dropdown-toggle.btn-google{background-image:none}
.btn-google.disabled,.btn-google[disabled],fieldset[disabled] .btn-google,.btn-google.disabled:hover,.btn-google[disabled]:hover,fieldset[disabled] .btn-google:hover,.btn-google.disabled:focus,.btn-google[disabled]:focus,fieldset[disabled] .btn-google:focus,.btn-google.disabled.focus,.btn-google[disabled].focus,fieldset[disabled] .btn-google.focus,.btn-google.disabled:active,.btn-google[disabled]:active,fieldset[disabled] .btn-google:active,.btn-google.disabled.active,.btn-google[disabled].active,fieldset[disabled] .btn-google.active{background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}
.btn-google .badge{color:#dd4b39;background-color:#fff}
.btn-instagram{color:#fff;background-color:#3f729b;border-color:rgba(0,0,0,0.2)}.btn-instagram:focus,.btn-instagram.focus{color:#fff;background-color:#305777;border-color:rgba(0,0,0,0.2)}
.btn-instagram:hover{color:#fff;background-color:#305777;border-color:rgba(0,0,0,0.2)}
.btn-instagram:active,.btn-instagram.active,.open>.dropdown-toggle.btn-instagram{color:#fff;background-color:#305777;border-color:rgba(0,0,0,0.2)}.btn-instagram:active:hover,.btn-instagram.active:hover,.open>.dropdown-toggle.btn-instagram:hover,.btn-instagram:active:focus,.btn-instagram.active:focus,.open>.dropdown-toggle.btn-instagram:focus,.btn-instagram:active.focus,.btn-instagram.active.focus,.open>.dropdown-toggle.btn-instagram.focus{color:#fff;background-color:#26455d;border-color:rgba(0,0,0,0.2)}
.btn-instagram:active,.btn-instagram.active,.open>.dropdown-toggle.btn-instagram{background-image:none}
.btn-instagram.disabled,.btn-instagram[disabled],fieldset[disabled] .btn-instagram,.btn-instagram.disabled:hover,.btn-instagram[disabled]:hover,fieldset[disabled] .btn-instagram:hover,.btn-instagram.disabled:focus,.btn-instagram[disabled]:focus,fieldset[disabled] .btn-instagram:focus,.btn-instagram.disabled.focus,.btn-instagram[disabled].focus,fieldset[disabled] .btn-instagram.focus,.btn-instagram.disabled:active,.btn-instagram[disabled]:active,fieldset[disabled] .btn-instagram:active,.btn-instagram.disabled.active,.btn-instagram[disabled].active,fieldset[disabled] .btn-instagram.active{background-color:#3f729b;border-color:rgba(0,0,0,0.2)}
.btn-instagram .badge{color:#3f729b;background-color:#fff}
.btn-linkedin{color:#fff;background-color:#007bb6;border-color:rgba(0,0,0,0.2)}.btn-linkedin:focus,.btn-linkedin.focus{color:#fff;background-color:#005983;border-color:rgba(0,0,0,0.2)}
.btn-linkedin:hover{color:#fff;background-color:#005983;border-color:rgba(0,0,0,0.2)}
.btn-linkedin:active,.btn-linkedin.active,.open>.dropdown-toggle.btn-linkedin{color:#fff;background-color:#005983;border-color:rgba(0,0,0,0.2)}.btn-linkedin:active:hover,.btn-linkedin.active:hover,.open>.dropdown-toggle.btn-linkedin:hover,.btn-linkedin:active:focus,.btn-linkedin.active:focus,.open>.dropdown-toggle.btn-linkedin:focus,.btn-linkedin:active.focus,.btn-linkedin.active.focus,.open>.dropdown-toggle.btn-linkedin.focus{color:#fff;background-color:#00405f;border-color:rgba(0,0,0,0.2)}
.btn-linkedin:active,.btn-linkedin.active,.open>.dropdown-toggle.btn-linkedin{background-image:none}
.btn-linkedin.disabled,.btn-linkedin[disabled],fieldset[disabled] .btn-linkedin,.btn-linkedin.disabled:hover,.btn-linkedin[disabled]:hover,fieldset[disabled] .btn-linkedin:hover,.btn-linkedin.disabled:focus,.btn-linkedin[disabled]:focus,fieldset[disabled] .btn-linkedin:focus,.btn-linkedin.disabled.focus,.btn-linkedin[disabled].focus,fieldset[disabled] .btn-linkedin.focus,.btn-linkedin.disabled:active,.btn-linkedin[disabled]:active,fieldset[disabled] .btn-linkedin:active,.btn-linkedin.disabled.active,.btn-linkedin[disabled].active,fieldset[disabled] .btn-linkedin.active{background-color:#007bb6;border-color:rgba(0,0,0,0.2)}
.btn-linkedin .badge{color:#007bb6;background-color:#fff}
.btn-twitter{color:#fff;background-color:#55acee;border-color:rgba(0,0,0,0.2)}.btn-twitter:focus,.btn-twitter.focus{color:#fff;background-color:#2795e9;border-color:rgba(0,0,0,0.2)}
.btn-twitter:hover{color:#fff;background-color:#2795e9;border-color:rgba(0,0,0,0.2)}
.btn-twitter:active,.btn-twitter.active,.open>.dropdown-toggle.btn-twitter{color:#fff;background-color:#2795e9;border-color:rgba(0,0,0,0.2)}.btn-twitter:active:hover,.btn-twitter.active:hover,.open>.dropdown-toggle.btn-twitter:hover,.btn-twitter:active:focus,.btn-twitter.active:focus,.open>.dropdown-toggle.btn-twitter:focus,.btn-twitter:active.focus,.btn-twitter.active.focus,.open>.dropdown-toggle.btn-twitter.focus{color:#fff;background-color:#1583d7;border-color:rgba(0,0,0,0.2)}
.btn-twitter:active,.btn-twitter.active,.open>.dropdown-toggle.btn-twitter{background-image:none}
.btn-twitter.disabled,.btn-twitter[disabled],fieldset[disabled] .btn-twitter,.btn-twitter.disabled:hover,.btn-twitter[disabled]:hover,fieldset[disabled] .btn-twitter:hover,.btn-twitter.disabled:focus,.btn-twitter[disabled]:focus,fieldset[disabled] .btn-twitter:focus,.btn-twitter.disabled.focus,.btn-twitter[disabled].focus,fieldset[disabled] .btn-twitter.focus,.btn-twitter.disabled:active,.btn-twitter[disabled]:active,fieldset[disabled] .btn-twitter:active,.btn-twitter.disabled.active,.btn-twitter[disabled].active,fieldset[disabled] .btn-twitter.active{background-color:#55acee;border-color:rgba(0,0,0,0.2)}
.btn-twitter .badge{color:#55acee;background-color:#fff}

    </style>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!--If you need to extend till the end use btn-block in a href class-->
                            <!--If you need not extend till the end use btn-lg in a href class-->
                            <div class="row">
                                
                                <div class="col-sm-4">
                                    <a class="btn btn-block btn-social btn-github" href="http://localhost:8000/github/login">
                                            <span class="fa fa-github"></span> Login with Github
                                    </a>
                                </div>
                                
                                <div class="col-sm-4">
                                    <a class="btn btn-block  btn-social btn-facebook" href="http://localhost:8000/facebook/login">
                                        <span class="fa fa-facebook"></span> Login with Facebook
                                    </a>
                                </div>
                                
                                <div class="col-sm-4">
                                    <a class="btn btn-block  btn-social btn-google" href="http://localhost:8000/google/login">
                                        <span class="fa fa-google"></span> Login with Google
                                    </a>
                                </div>
                                
                            </div>
                        </br>
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <a class="btn btn-block  btn-social btn-linkedin" href="http://localhost:8000/link/login">
                                        <span class="fa fa-linkedin"></span> Login with Linkedin
                                    </a>
                                </div>
                                
                                <div class="col-sm-6">
                                    <a class="btn btn-block  btn-social btn-instagram" href="http://localhost:8000/insta/login">
                                        <span class="fa fa-instagram"></span> Login with Instagram
                                    </a>
                                </div>
                               
                            </div>
                            </br>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
