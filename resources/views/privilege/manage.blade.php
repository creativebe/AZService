@extends('layouts.app')

@section('content')
	@foreach ($roles as $key => $role)
		<p>{{ $role->name }}</p>
	@endforeach
@endsection