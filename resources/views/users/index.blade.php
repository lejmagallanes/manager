@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"> 
                <div class="panel-heading">LIST OF USERS</div>
                <div class="panel-body">
                    <ul>
                    @foreach ($users as $user)

                        @include('users.show')
                    
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
