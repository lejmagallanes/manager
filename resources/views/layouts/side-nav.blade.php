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
                    <a style="color: inherit" class="logout_open" href="/logout" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out"></i></a>
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
            <li class="panel">
                <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#charts">
                    <i class="fa fa-users"></i> Users <i class="fa fa-caret-down"></i>
                </a>
                <ul class="collapse nav" id="charts">
                    <li>
                        <a href="/users/create">
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
        </ul>
    </div>
</nav>