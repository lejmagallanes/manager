<nav class="navbar-side" role="navigation">
    <div class="navbar-collapse sidebar-collapse collapse">
        <ul id="side" class="nav navbar-nav side-nav">
            <li class="side-user hidden-xs">
                <img class="img-circle" width="150" height="150" src="{{ asset('images/images.jpg') }}" alt="">
                <p class="welcome">
                    <i class="fa fa-key"></i> Logged in as
                </p>
                <p class="name tooltip-sidebar-logout">
                    <span class="last-name">{{ Auth::user()->name }}</span> 
                    <a style="color: inherit" class="logout_open" href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
                </p>
                <div class="clearfix"></div>
            </li>
            <li class="nav-search">
                <form role="form">
                    <input type="search" class="form-control" placeholder="Search...">
                    <button class="btn">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </li>
            <li>
                <a class="active" href="/">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li>
                <a class="active" href="/activity_logs">
                    <i class="fa fa-history"></i> Activity Log
                </a>
            </li>
            <li>
                <a class="active" href="/permissions">
                    <i class="fa fa-lock"></i> Permission/Roles
                </a>
            </li>
            <li class="panel">
                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#pages">
                    <i class="fa fa-users"></i> Users <i class="fa fa-caret-down"></i>
                </a>
                <ul class="collapse nav" id="pages">
                    <li>
                        <a href="/create/users">
                            <i class="fa fa-angle-double-right"></i> Create New User
                        </a>
                    </li>
                    <li>
                        <a href="/users">
                            <i class="fa fa-angle-double-right"></i> Users List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="panel">
                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#accounting">
                    <i class="fa fa-briefcase"></i> Accounting <i class="fa fa-caret-down"></i>
                </a>
                <ul class="collapse nav" id="accounting">
                    <li>
                        <a href="/accounting/report">
                            <i class="fa fa-angle-double-right"></i> Reports
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-angle-double-right"></i> Graph
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-angle-double-right"></i> Extra
                        </a>
                    </li>
                </ul>
                <li class="panel">
                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#inventory">
                    <i class="fa fa-cubes"></i> Inventory <i class="fa fa-caret-down"></i>
                </a>
                <ul class="collapse nav" id="inventory">
                    <li>
                        <a href="">
                            <i class="fa fa-angle-double-right"></i> Reports
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-angle-double-right"></i> Graph
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-angle-double-right"></i> Extra
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-angle-double-right"></i> Extra
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>