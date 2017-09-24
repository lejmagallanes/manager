<!DOCTYPE html>
<html lang="en">
<head>
    @include ('layouts.head')
</head>
<body class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-banner text-center">
                    <h1><i class="fa fa-gears"></i> Aoma Admin</h1>
                </div>
                <div class="portlet portlet-green">
                    <div class="portlet-heading login-heading">
                        <div class="portlet-title">
                            <h4><strong>Login to Aoma Admin!</strong>
                            </h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="portlet-body">
                        <form accept-charset="UTF-8" role="form" method="POST" action="/login">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <br>
                                <button class="btn btn-lg btn-green btn-block" type="submit">
                                    Sign In 
                                </button>
                            </fieldset>
                            <br>
                        </form>
                    </div>
                </div>
                @include ('layouts.errors')
            </div>
        </div>
    </div>
    @include ('layouts.script')
</body>

</html>
