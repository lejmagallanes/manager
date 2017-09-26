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
                    <a href="create/users">
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
        @foreach ($users as $user)
        <div class="col-lg-2 col-sm-3">
            <div class="circle-tile">
                <a href="/users/{{ $user->id }}">
                    <div class="circle-tile-heading dark-blue">
                        <i class="fa fa-user fa-fw fa-3x"></i>
                    </div>
                </a>
                <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded">
                        {{ $user->name }}
                    </div>
                    <br>
                    <a href="/users/{{ $user->id }}" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                </div>   
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        {{ $users->links() }}
    </div>
</div>

@endsection
