@extends('admin.layouts.template')

@section('content')
	@if (count($errors) > 0)
	<ul>
		@foreach($errors->all() as $error)
			<li class="text-danger">{{ $error }}</li>
		@endforeach
	</ul>
	@endif

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

	<form action="{{ url('admin/users') }}" method="post">
		@csrf
		<div class="row">
				<div class="col-12 mb-4">
					<div class="card border-light shadow-sm components-section">
						<div class="card-body">
							<div class="row mb-4">
								<div class="col-lg-4 col-sm-6">
									<!-- Form -->
									<div class="mb-3">
										<label for="name">Name</label>
										<div class="input-group">
											<input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
										</div>
									</div>
									<!-- End of Form -->
									<!-- Form -->
									<div class="mb-4">
										<label for="email">Email address</label>
										<input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
										<small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
									</div>
									<!-- End of Form -->
									<!-- Form -->
									<div class="mb-3">
										<label for="password">Password</label>
										<div class="input-group">
											<input type="password" class="form-control" name="password" id="password" required>
											<span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
										</div>
									</div>
									<!-- End of Form -->
									<!-- Form -->
									<div class="mb-3">
										<label for="password_confirmation">Confirm Password</label>
										<div class="input-group">
											<input type="password" class="form-control" name="password_confirmation" id="password" required>
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
		<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> 登録</button>
	</form>
@endsection​