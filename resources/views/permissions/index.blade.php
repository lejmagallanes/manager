@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
                Roles List                
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                </li>
                <li class="active">
                    Roles
                </li>
                <li class="pull-right">
                    <a href="">
                        <div class="btn btn-green btn-square date-picker">
                            <strong>Create New Role</strong>
                        </div>
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <form method="POST" action="/permissions/search">
            <div class="input-group">
                {{ csrf_field() }}
                <input type="text" class="form-control" name="key" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Search</button>
                </span>
            </div>
        </form>
    </div><br>
</div>
<div class="row">
    <div class="col-lg-6">
        @foreach ($roles as $role)
        <div class="col-lg-2 col-sm-3">
            <div class="circle-tile">
                <a href="/permissions/{{ $role->id }}">
                    <div class="circle-tile-heading dark-blue">
                        <i class="fa fa-lock fa-fw fa-3x"></i>
                    </div>
                </a>
                <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded">
                        {{ $role->display_name }}
                    </div>
                    <br>
                    <a href="/permissions/{{ $role->id }}" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        {{ $roles->links() }}
    </div>
</div>

@endsection
