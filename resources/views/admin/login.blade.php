<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>超控制台登录</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">超控制台登录</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" id="email" name="email" type="email" autofocus value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="help-block alert alert-warning alert-dismissible fade in" style="padding:8px">
                                            {{ $errors->first('email') }}
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                                        @if ($errors->has('password'))
                                            <span class="help-block alert alert-warning alert-dismissible fade in" style="padding:8px">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" <?php echo empty(old('remember')) ? '' : 'checked'; ?> >Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" value="登录" class="btn btn-lg btn-success btn-block"/>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('/dist/js/sb-admin-2.js') }}"></script>

    </body>

    </html>
