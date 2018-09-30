@extends('layouts.master')

@section('title', 'Users')

@section('page-title', 'Edit User')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="pull-left">
					<h2>Edit New User</h2>
				</div>
				<div class="pull-right">
					<a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
				</div>
			</div>
			<div class="card-body">
				{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<strong>First Name:</strong>
							{!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<strong>Last Name:</strong>
							{!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<strong>Email:</strong>
							{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<strong>Address:</strong>
							{!! Form::text('address', null, array('placeholder' => 'address','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<strong>Password:</strong>
							{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<strong>Confirm Password:</strong>
							{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Role:</strong>
							{!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<button type="submit" class="btn btn-primary btn-block">Edit User</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>

	</div>
</div>





@endsection