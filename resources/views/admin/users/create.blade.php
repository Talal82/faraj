@extends('layouts.master')

@section('title', 'Users')

@section('page-title', 'Create User')

@section('stylesheets')

{{-- custom css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/customStyles.css') }}">

{{-- select2.css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<div class="pull-left">
					<h4>Create New User</h4>
				</div>
				<div class="pull-right">
					<a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
				</div>
			</div>
			<div class="card-body">
				{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<label for="first_name">First Name:</label>
							{!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<label for="">Last Name:</label>
							{!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<label for="">Email:</label>
							{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<label for="">Address:</label>
							{!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<label for="">Password:</label>
							{!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="form-group">
							<label>Confirm Password:</label>
							{!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label>Roles:</label>
							{!! Form::select('roles[]', $roles,[], array('class' => 'form-control select2','multiple')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<button type="submit" class="btn btn-primary btn-block">Create New User</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
		
	</div>
</div>
@endsection


@section('scripts')
{{-- select2.js --}}
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<script>
	$('.select2').select2();
</script>

@endsection
