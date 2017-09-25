@extends ('layouts.master')
@section ('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
                Create New User
            </h1>
            @include ('layouts.flash')
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                </li>
                <li class="active">Create New User</li>
                <li class="pull-right">
                    <a href="/users">
                        <div class="btn btn-green btn-square date-picker">
                            <strong>Users List</strong>
                        </div>
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4>Registration Form</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="basicFormExample" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <form role="form" method="POST" action="/users">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="name" class="form-control" name="name" id="" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <select class="form-control" name="role">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input type="password" class="form-control" id="password-confirm" placeholder="Confirm Password" name="password_confirmation">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                @include ('layouts.errors')
            </div>
        </div>
    </div>
</div>
@endsection