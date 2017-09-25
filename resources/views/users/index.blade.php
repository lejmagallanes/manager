@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
                Users List
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                </li>
                <li class="active">
                    Users List
                </li>
                <li class="pull-right">
                    <a href="/users/create">
                        <div class="btn btn-green btn-square date-picker">
                            <strong>Create New User</strong>
                        </div>
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <form method="POST" action="/users/search">
                <div class="input-group">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="key" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div><br>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>Users Table</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if (isset($users))                      
                            @foreach ($users as $user)
                            <tbody>
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if (count($user->roles))
                                    @foreach($user->roles as $role)
                                    <td>{{ $role->display_name }}</td>
                                    @endforeach
                                    @else
                                    <td></td>
                                    @endif
                                    <td>
                                        <a href="/users/{{ $user->id }}/edit">
                                            <i class="fa fa-edit fa-fw fa-2x"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        @else
                            @if ($noResults)
                                {{ $noResults }}
                            @endif
                        @endif
                    </table>
                </div>

                @if (isset($users))  
                    {{ $users->links() }}
                @endif

            </div>
        </div>
    </div>
</div>

@endsection
