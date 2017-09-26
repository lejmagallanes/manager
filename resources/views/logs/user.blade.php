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
                    <a href="/activity_log">Activity Log</a>
                </li>
                <li class="active">
                    @foreach ($name as $person)
                    {{ $person->name }}
                    @endforeach
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
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($logsByUser as $log)
                          <tr>
                            <td>{{ $log->created_at->diffForHumans() }}</td>
                            <td>{{ $log->description }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            {{ $logsByUser->links() }}
        </div>
    </div>
</div>
</div>

@endsection
