@extends('layouts.app')
@section('content')

<table class="table table-striped">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Admin</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->admin ? "Yes" : "No"}}</td>
				<td> 
					@if($user->admin)
					<a href="/users/{{$user->id}}/admin/0">Remove Admin</a>
					@else
					<a href="/users/{{$user->id}}/admin/1">Make Admin</a>
					@endif
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@endsection