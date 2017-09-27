@extends ('layouts.master')

@section ('content')

<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
                User Profile
                <small>User Information</small>
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                </li>
                <li class="active">User Profile</li>
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="portlet portlet-default">
            <div class="portlet-body">
                <div id="userTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="overview">
                        <div class="row">
                            <div class="col-lg-2 col-md-3">
                                <a href="/users/{{ $user->id }}/edit">
                                    <span class="profile-edit">Edit</span>
                                </a>
                                <i class="fa fa-user fa-fw fa-5x"></i>
                            </div>
                            <div class="col-lg-7 col-md-5">
                                <h1>{{ $user->name }}</h1>
                                Email: <strong>{{ $user->email }}</strong><br><br>
                                @foreach ($user->roles as $role)
                                Role: <strong>{{ $role->display_name }}</strong>
                                @endforeach          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<ul>
    <li><a href="/users/{{ $user->id }}">{{ $user->name }}</a></li>
</ul>

@endsection
