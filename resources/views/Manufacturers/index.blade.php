@extends('layouts.app')
@section('content')
<a href="/manufacturer/create">New manufacturer</a>
<table class="table table-striped">
  <thead>
  <tr>
    <th>Name</th> 
    <th>Date of Create</th>
    <th>Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($manufacturers as $manufacturer)
  	<tr>
  		<td>{{$manufacturer->name}}</td>
  		<td>{{$manufacturer->date_of_create}}</td>
  		<td>
  			<a href="/manufacturer/{{$manufacturer->id}}">Show</a>
  			<a href="/manufacturer/{{$manufacturer->id}}/edit">Edit</a>
  			<a href="/manufacturer/{{$manufacturer->id}}/delete">Delete</a>
  		</td>
  	</tr>
  @endforeach
  </tbody>
</table>
@endsection