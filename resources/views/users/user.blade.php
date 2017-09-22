 <div class="form-group">
 	<form class="form-horizontal" method="POST" action="/users/">
 		{{ csrf_field() }}

 		<div class="form-group">
 			<label for="name" class="col-md-4 control-label">Name</label>

 			<div class="col-md-6">
 			<input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required>
 			</div>
 		</div>

 		<div class="form-group">
 			<label for="position" class="col-md-4 control-label">Position</label>

 			<div class="col-md-6" >
 				<select class="form-control" name="role">
 					@foreach ($roles as $role)
 					<option value="{{ $role->name }}">{{ $role->display_name }}</option>
 					@endforeach
 				</select>
 			</div>
 		</div>

 		<div class="form-group">
 			<label for="email" class="col-md-4 control-label">E-Mail Address</label>

 			<div class="col-md-6">
 				<input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
 			</div>
 		</div>

 		{{-- <div class="form-group">
 			<label for="password" class="col-md-4 control-label">Password</label>

 			<div class="col-md-6">
 				<input id="password" type="password" class="form-control" name="password" required>
 			</div>
 		</div>

 		<div class="form-group">
 			<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
 			<div class="col-md-6">
 				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
 			</div>
 		</div> --}}

 		<div class="form-group">
 			<div class="col-md-6 col-md-offset-4">
 				<button type="submit" class="btn btn-primary">
 					Save
 				</button>
 			</div>
 		</div>
 	</form>
 </div>