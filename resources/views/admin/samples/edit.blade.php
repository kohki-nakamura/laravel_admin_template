@extends('admin.layouts.template')

@section('content')
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

	{!! Form::open(['url' => action('admin\SampleController@update', $sample), 'method' => 'post']) !!}
		@csrf
		@method('PUT')
		<div class="row">
				<div class="col-12 mb-4">
					<div class="card border-light shadow-sm components-section">
						<div class="card-body">
							<div class="row mb-4">
								<div class="row mb-4">
									<div class="col-lg-4 col-sm-6">
										<!-- Form -->
										<div class="mb-3">
											{{ Form::label('title', 'Title') }}
											<div class="input-group">
												{{ Form::input('text', 'title', old('title', $sample->title), ['id' => 'title','class' => 'form-control']) }}
											</div>
										</div>
										<!-- End of Form -->

										<!-- Form -->
										<div class="mb-3">
											{{ Form::label('content', 'Content') }}
											<div class="input-group">
												{{ Form::input('text', 'content', old('content', $sample->content), ['id' => 'content','class' => 'form-control']) }}
											</div>
										</div>
										<!-- End of Form -->
									</div>
								</div>

								<!-- Form -->
								<div class="row mb-5 mb-lg-5">
									<div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
										<!-- Radio -->
										<fieldset>
											<legend class="h6">公開設定</legend>
											<div class="form-check">
												{{ Form::radio('is_public', 1, (old('is_public', $sample->is_public == true)), ['class' => 'form-check-input']) }}
												{{ Form::label('is_public', '公開', ['class' => 'form-check-label']) }}
											</div>
											<div class="form-check">
												{{ Form::radio('is_public', 0, (old('is_public', $sample->is_public == false)), ['class' => 'form-check-input']) }}
												{{ Form::label('is_public', '非公開', ['class' => 'form-check-label']) }}
											</div>
											<!-- End of Radio -->
										</fieldset>
									</div>
								</div>
								<!-- End of Form -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="{{ action('admin\SampleController@index') }}" class="btn btn-gray m-r-5"><i class="fa fa-th-list" aria-hidden="true"></i></span> 一覧</a>
		{{ Form::button('<i class="fa fa-sync-alt"></i>  更新', ['class' => "btn btn-primary m-r-5", 'type' => 'submit']) }}
	{!! Form::close() !!}
@endsection​