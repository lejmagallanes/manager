@extends ('layouts.master')
@section ('content')

<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>Dashboard
                <small>Content Overview</small>
            </h1>
            @include ('layouts.flash')
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE AREA -->
@include('dashboard.roles')

@endsection