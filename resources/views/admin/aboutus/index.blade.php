@extends('layouts.master')

@section('title', 'About Us')

@section('page-title', 'About Us')

@section('content')
<div class="row">
	<div class="col-lg-12">
		{!! Form::model($about, ['method' => 'PUT','route' => ['about.update', $about->id]]) !!}
		<div class="card">
			<div class="card-header">
				<div class="pull-left">
					<h4>Edit About Us Information</h4>
				</div>
				<div class="pull-right">
					{{-- <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a> --}}
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
			<div class="card-body">
				
				<div class="row">
					<div class="col-md-12">
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a href="#aboutus" data-toggle="tab" aria-expanded="false" class="nav-link active">
									About Us
								</a>
							</li>

							<li class="nav-item">
								<a href="#mission" data-toggle="tab" aria-expanded="false" class="nav-link">
									Mission
								</a>
							</li>

							<li class="nav-item">
								<a href="#set2" data-toggle="tab" aria-expanded="false" class="nav-link">
									Chairman's Message
								</a>
							</li>

							<li class="nav-item">
								<a href="#vision" data-toggle="tab" aria-expanded="false" class="nav-link">
									vision
								</a>
							</li>

						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade show active" id="aboutus">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="name">Main Title:</label>
											{!! Form::text('aboutus_title', null, array('placeholder' => 'Main Title','class' => 'form-control')) !!}
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="aboutus_detail">Who we Are:</label>
											{!! Form::textarea('aboutus_detail', null, array('placeholder' => 'Who we are...','class' => 'form-control')) !!}
										</div>
									</div>
								</div>

							</div>

							<div role="tabpanel" class="tab-pane fade " id="mission">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="name">Mission Title:</label>
											{!! Form::text('mission_title', null, array('placeholder' => 'Mission Title','class' => 'form-control')) !!}
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="mission_detail">Mission Detail:</label>
											{!! Form::textarea('mission_detail', null, array('placeholder' => 'Mission Detail','class' => 'form-control')) !!}
										</div>
									</div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade " id="set2">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="name">Chairman's Message Title:</label>
											{!! Form::text('message_title', null, array('placeholder' => 'Message Title','class' => 'form-control')) !!}
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="message_detail">Chairman's Message Detail:</label>
											{!! Form::textarea('message_detail', null, array('placeholder' => 'Who we are...','class' => 'form-control')) !!}
										</div>
									</div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade " id="vision">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="name">Vision Title:</label>
											{!! Form::text('vision_title', null, array('placeholder' => 'Vision Title','class' => 'form-control')) !!}
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<label for="vision_detail">Vision Detail:</label>
											{!! Form::textarea('vision_detail', null, array('placeholder' => 'Vision Detail','class' => 'form-control')) !!}
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>

					{{-- <div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="name">Main Title:</label>
							{!! Form::text('aboutus_title', null, array('placeholder' => 'Main Title','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="aboutus_detail">Who we Are:</label>
							{!! Form::textarea('aboutus_detail', null, array('placeholder' => 'Who we are...','class' => 'form-control')) !!}
						</div>
					</div> --}}

					{{-- <div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="name">Chairman's Message Title:</label>
							{!! Form::text('message_title', null, array('placeholder' => 'Message Title','class' => 'form-control')) !!}
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="message_detail">Chairman's Message Detail:</label>
							{!! Form::textarea('message_detail', null, array('placeholder' => 'Who we are...','class' => 'form-control')) !!}
						</div>
					</div> --}}

					{{-- <div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="name">Mission Title:</label>
							{!! Form::text('mission_title', null, array('placeholder' => 'Mission Title','class' => 'form-control')) !!}
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="mission_detail">Mission Detail:</label>
							{!! Form::textarea('mission_detail', null, array('placeholder' => 'Mission Detail','class' => 'form-control')) !!}
						</div>
					</div> --}}

					{{-- <div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="name">Vision Title:</label>
							{!! Form::text('vision_title', null, array('placeholder' => 'Vision Title','class' => 'form-control')) !!}
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<label for="vision_detail">Vision Detail:</label>
							{!! Form::textarea('vision_detail', null, array('placeholder' => 'Vision Detail','class' => 'form-control')) !!}
						</div>
					</div> --}}

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