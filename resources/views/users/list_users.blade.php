@extends('layouts.app')

@section('content')
	<div class="main-content">
		@foreach ($users as $key => $user)
			<p>{{ $user->username }}</p>
		@endforeach
	</div>
@endsection