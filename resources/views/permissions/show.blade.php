@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
                Roles Permission               
            </h1>
            @include ('layouts.flash')
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                </li>
                <li class="active">
                    Roles Permission
                </li> 
                <li class="pull-right">
                    <a href="">
                        <div class="btn btn-green btn-square date-picker">
                            <strong>Create New Roles</strong>
                        </div>
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <h3>{{ $role->display_name }}</h3><br>
</div>
<div class="col-lg-12">
    <div id="inlineFormExample" class="panel-collapse collapse in">
        <form class="form-inline" role="form" method="POST" action="/permissions/{{ $role->id }}/permission">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <div class="">
                    <h4>Permission</h4>
                </div>            
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                    <select class="form-control" name="permission">
                        @foreach ($permissions as $permission)
                            <option value="{{ $permission->id }}">{{ $permission->parent_module }} - {{ $permission->display_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="hidden" name="role_id" value="{{ $role->id }}">
            <button type="submit" class="btn btn-default">Add</button>
        </form>
    </div>
</div><br>
<div class="col-lg-12">
    <div class="portlet portlet-default">
        <div class="portlet-heading">
            <div class="portlet-title">
                <h4>Permission</h4>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="portlet-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Parent Module</th>
                            <th>Name</th>
                            <th>Display Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($role->permissions as $permission)
                    <tbody>
                        <tr>
                            <td>{{ $permission->parent_module }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->display_name }}</td>
                            <td>
                                <a href="/permissions/{{ $role->id }}/delete/{{ $permission->id }}">
                                    <div class="fa fa-remove">
                                    </div>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.portlet -->

@endsection