@extends('layouts.app')

@section('content')
	<div class="main-content">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Description</th>
					<th>Created at</th>
					<th>Updated at</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($roles as $key => $role)
				<tr>
					<td>{{ $role->display_name }}</td>
					<td>{{ $role->description }}</td>
					<td>{{ $role->created_at }}</td>
					<td>{{ $role->updated_at }}</td>
					<td>action</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection