<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include ('layouts.head')
</head>
<body>
    <div id="wrapper">
        @include('layouts.top-nav')
        @include('layouts.side-nav')
        <div id="page-wrapper">
            <div class="page-content">
                @yield('content')   
            </div>
        </div>
        <div id="logout">
            <div class="logout-message">
                <img class="img-circle img-logout" width="150" height="150" src="{{ asset('images/images.jpg')}}" alt="">
                <h3>
                    <i class="fa fa-sign-out text-green"></i> Ready to go?
                </h3>
                <p>Select "Logout" below if you are ready<br> to end your current session.</p>
                <ul class="list-inline">
                    <li>
                        <form method="POST" action="/logout">
                            {{ csrf_field() }}
                            <button class="btn btn-green" type="submit">
                                <strong>
                                    Logout
                                </strong>
                            </button>
                        </form>
                    </li>
                    <li>
                        <button class="logout_close btn btn-green">Cancel</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @include('layouts.script')
</body>
</html>
