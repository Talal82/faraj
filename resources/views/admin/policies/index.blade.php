@extends('layouts.master')

@section('title', 'Privacy Policy')

@section('page-title', 'Privacy Policy')

@section('content')
<div class="row">
	<div class="col-lg-12">
		{!! Form::model($policy, ['method' => 'PUT','route' => ['policy.update', $policy->id]]) !!}
		<div class="card">
			<div class="card-header">
				<div class="pull-left">
					<h4>Edit Policy</h4>
				</div>
				<div class="pull-right">
					{{-- <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a> --}}
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
			<div class="card-body">
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="name">Title:</label>
							{!! Form::text('name', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="detail">Last Name:</label>
							{!! Form::textarea('detail', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
						</div>
					</div>
					
					
				</div>
				
			</div>
		</div><!--card-->
		{!! Form::close() !!}
		
	</div>
</div>
@endsection

@section('scripts')

<script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function () {
		tinymce.init({
			selector: "textarea",
		});
	});
</script>

@endsection