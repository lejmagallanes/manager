@extends ('layouts.master')
@section ('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
                Edit User 
            </h1>
            @include ('layouts.flash')
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                </li>
                <li class="active">Edit User</li>
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
                            <h4>Edit Form</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="basicFormExample" class="panel-collapse collapse in">
                        <div class="portlet-body">
                            <form role="form" method="POST" action="/users/{{ $users->id }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="name" class="form-control" name="name" id="" value="{{ $users->name }}" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <select class="form-control" name="role" required>
                                        @if (count($users->roles))
                                            @foreach ($users->roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                                            @endforeach
                                        @else
                                            <option>Add Position</option>
                                        @endif
                                        @foreach ($roles as $roles)
                                            <option value="{{ $roles->id }}">{{ $roles->display_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{ $users->email }}" id="" placeholder="Enter email">
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