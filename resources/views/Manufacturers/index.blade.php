@extends('layouts.app')
@section('content')
@if(Auth::user()->admin)
<a href="/manufacturer/create">New manufacturer</a>
@endif
<table class="table table-striped">
  <thead>
  <tr>
    <th>ID</th>
    <th>Name</th> 
    <th>Date of Create</th>
    @if(Auth::user()->admin)
    <th>Actions</th>
    @endif
  </tr>
  </thead>
  <tbody>
  @foreach($manufacturers as $manufacturer)
  	<tr>
      <td>{{$manufacturer->id}}</td>
  		<td>{{$manufacturer->name}}</td>
  		<td>{{$manufacturer->date_of_create}}</td>
      @if(Auth::user()->admin)
  		<td>
  			<a href="/manufacturer/{{$manufacturer->id}}">Show</a>
  			<a href="/manufacturer/{{$manufacturer->id}}/edit">Edit</a>
  			<a href="/manufacturer/{{$manufacturer->id}}/delete">Delete</a>
  		</td>
      @endif
  	</tr>
  @endforeach
  </tbody>
</table>
@endsection