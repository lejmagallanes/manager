<nav class="navbar-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".sidebar-collapse">
            <i class="fa fa-bars"></i> Menu
        </button>
        
    </div>
    <div class="nav-top">
        <ul class="nav navbar-left">
            <li class="tooltip-sidebar-toggle">
                <a href="#" id="sidebar-toggle" data-toggle="tooltip" data-placement="right" title="Sidebar Toggle">
                    <i class="fa fa-bars"></i>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="profile.html">
                            <i class="fa fa-user"></i> My Profile
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="logout_open" href="/logout">
                            <i class="fa fa-sign-out"></i> Logout
                            <strong>{{ Auth::user()->name }}</strong>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>