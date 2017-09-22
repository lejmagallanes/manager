@extends ('layouts.app')
@section ('content')
<div class="container">
    <div class="row">
        <h1>Staff List</h1>

        <ul>
            @foreach ($roles as $role)
            <li>{{ $role->display_name }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection