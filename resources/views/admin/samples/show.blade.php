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
					<th>タイトル</th>
					<th>{{ $sample->title }}</th>
				</tr>
				<tr>
					<th>内容</th>
					<th>{{ $sample->content }}</th>
				</tr>
				<tr>
					<th>公開設定</th>
					<th>{{ $sample->is_public ? "公開" : "非公開" }}</th>
				</tr>
				<tr>
					<th>作成日</th>
					<th>
						@if(isset($sample->created_at))
							{{ $sample->created_at->format('Y/m/d H:i:s') }}
						@endif
					</th>
				</tr>
				<tr>
					<th>更新日</th>
					<th>
						@if(isset($sample->updated_at))
							{{ $sample->updated_at->format('Y/m/d H:i:s') }}
						@endif</th>
				</tr>
			</tbody>
		</table>
	</div>
	<br>
	<a href="{{ action('admin\SampleController@index') }}" class="btn btn-gray m-r-5"><i class="fa fa-th-list" aria-hidden="true"></i></span> 一覧</a>
	<a href="{{ action('admin\SampleController@edit', $sample) }}" class="btn btn-success m-r-5"><span class="fa fa-edit"></span> 編集</a>
@endsection​