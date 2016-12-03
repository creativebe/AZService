@extends('layouts.app')

@section('content')
	<div class="main-content">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Username</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $key => $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->username }}</td>
					<td>{{ $user->email }}</td>
					<td>action</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection