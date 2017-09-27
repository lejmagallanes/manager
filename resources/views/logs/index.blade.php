@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
            Activity Log
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                </li>
                <li class="active">
                    Activity Log
                </li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="portlet portlet-default">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h4>Activity Logs</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Description</th>
                                <th>User</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activity as $act)
                            <tr>
                                <td>{{ $act->created_at->diffForHumans() }}</td>
                                <td>{{ $act->description }}</td>
                                <td>
                                    <a href="/activity_logs/{{$act->causer['id']}}">{{ $act->causer['name'] }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $activity->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
