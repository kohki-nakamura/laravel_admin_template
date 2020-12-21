@extends('admin.layouts.template')

@section('content')
	<div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>項目</th>
					<th>値</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>名前</th>
					<th>{{ $user->name }}</th>
				</tr>
				<tr>
					<th>メールアドレス</th>
					<th>{{ $user->email }}</th>
				</tr>
				<tr>
					<th>作成日</th>
					<th>
						@if(isset($user->created_at))
							{{ $user->created_at->format('Y/m/d H:i:s') }}
						@endif
					</th>
				</tr>
				<tr>
					<th>更新日</th>
					<th>
						@if(isset($user->updated_at))
							{{ $user->updated_at->format('Y/m/d H:i:s') }}
						@endif</th>
				</tr>
			</tbody>
		</table>
	</div>
	<td><a href="{{ action('admin\UserController@index') }}" class="btn btn-gray m-r-5"><span class="fa fa-arrow-alt-circle-left"></span> 戻る</a></td>
	<td><a href="#" class="btn btn-success m-r-5"><span class="fa fa-edit"></span> 編集</a></td>
@endsection​