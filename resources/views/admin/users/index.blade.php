@extends('admin.layouts.template')

@section('content')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
			<div class="d-block mb-4 mb-md-0">
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
							<ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
								<li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
								<li class="breadcrumb-item"><a href="#">Volt</a></li>
								<li class="breadcrumb-item active" aria-current="page">Transactions</li>
							</ol>
					</nav>
					<h2 class="h4">All Orders</h2>
					<p class="mb-0">Your web analytics dashboard template.</p>
			</div>
			<div class="btn-toolbar mb-2 mb-md-0">
					<div class="btn-group">
							<button type="button" class="btn btn-sm btn-outline-primary">Share</button>
							<button type="button" class="btn btn-sm btn-outline-primary">Export</button>
					</div>
			</div>
	</div>
	<div class="table-settings mb-4">
			<div class="row align-items-center justify-content-between">
					<div class="col col-md-6 col-lg-3 col-xl-4">
							<div class="input-group">
									<span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
									<input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
							</div>
					</div>
					<div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
							<div class="btn-group">
									<button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="icon icon-sm icon-gray">
													<span class="fas fa-cog"></span>
											</span>
											<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
											<span class="dropdown-item font-weight-bold text-dark">Show</span>
											<a class="dropdown-item d-flex font-weight-bold" href="#">10 <span class="icon icon-small ml-auto"><span class="fas fa-check"></span></span></a>
											<a class="dropdown-item font-weight-bold" href="#">20</a>
											<a class="dropdown-item font-weight-bold" href="#">30</a>
									</div>
							</div>
					</div>
			</div>
	</div>
	<div class="table-settings mb-4">
		<a href="{{ action('admin\UserController@create') }}" class="btn btn-primary m-r-5"><span class="fa fa-plus"></span> 新規作成</a>
	</div>
	<div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
			<table class="table table-hover">
					<thead>
							<tr>
									<th>ID</th>
									<th>名前</th>
									<th>メールアドレス</th>
									<th colspan="3"></th>
							</tr>
					</thead>
					<tbody>
							@foreach ($users as $user)
								<tr>
										<td>{{ $user->id }}</td>
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td><a href="{{ action('admin\UserController@show', $user) }}" class="btn btn-info m-r-5"><span class="fa fa-info"></span> 詳細</a></td>
										<td><a href="{{ action('admin\UserController@edit', $user) }}" class="btn btn-success m-r-5"><span class="fa fa-edit"></span> 編集</a></td>
										<form action="{{ action('admin\UserController@destroy', $user) }}" method="post">
											@csrf
											@method('DELETE')
											<td><button type="submit" class="btn btn-danger m-r-5"><span class="fa fa-trash"></span> 削除</button></td>
										</form>
								</tr>
							@endforeach
					</tbody>
			</table>
			<div class="card-footer px-3 border-0 d-flex align-items-center justify-content-between">
					{{ $users->links() }}
			</div>
	</div>
@endsection​