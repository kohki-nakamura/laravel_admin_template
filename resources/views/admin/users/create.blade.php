@extends('admin.layouts.template')

@section('content')
	@include('admin.layouts.error_message')

	<div class="py-4">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
				<li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
				<li class="breadcrumb-item"><a href="#">Components</a></li>
				<li class="breadcrumb-item active" aria-current="page">Forms</li>
			</ol>
		</nav>
		<div class="d-flex justify-content-between w-100 flex-wrap">
			<div class="mb-3 mb-lg-0">
				<h1 class="h4">Forms</h1>
				<p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
			</div>
			<div>
				<a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/forms/" class="btn btn-outline-gray"><i class="far fa-question-circle mr-1"></i> Forms Docs</a>
			</div>
		</div>
	</div>

	{!! Form::open(['url' => action('admin\UserController@store'), 'method' => 'post']) !!}
		@csrf
		<div class="row">
				<div class="col-12 mb-4">
					<div class="card border-light shadow-sm components-section">
						<div class="card-body">
							<div class="row mb-4">
								<div class="col-lg-4 col-sm-6">
									<!-- Form -->
									<div class="mb-3">
										{{ Form::label('name', 'Name') }}
										<div class="input-group">
											{{ Form::text('name', old('name'), ['id' => 'name','class' => 'form-control', 'required' => true]) }}
										</div>
									</div>
									<!-- End of Form -->
									<!-- Form -->
									<div class="mb-4">
										{{ Form::label('email', 'Email address') }}
										<div class="input-group">
											{{ Form::email('email', old('email'), ['id' => 'email','class' => 'form-control', 'required' => true]) }}
										</div>
										<small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
									</div>
									<!-- End of Form -->
									<!-- Form -->
									<div class="mb-3">
										{{ Form::label('password', 'Password') }}
										<div class="input-group">
											{{ Form::password('password', ['id' => 'password','class' => 'form-control', 'required' => true]) }}
											<span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
										</div>
									</div>
									<!-- End of Form -->
									<!-- Form -->
									<div class="mb-3">
										{{ Form::label('password_confirmation', 'Confirm Password') }}
										<div class="input-group">
											{{ Form::password('password_confirmation', ['id' => 'password_confirmation','class' => 'form-control', 'required' => true]) }}
											<span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
										</div>
									</div>
									<!-- End of Form -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="{{ action('admin\UserController@index') }}" class="btn btn-gray m-r-5"><i class="fa fa-th-list" aria-hidden="true"></i></span> 一覧</a>
		{{ Form::button('<i class="fa fa-plus" aria-hidden="true"></i> 登録', ['class' => "btn btn-primary m-r-5", 'type' => 'submit']) }}
	{!! Form::close() !!}
@endsection​