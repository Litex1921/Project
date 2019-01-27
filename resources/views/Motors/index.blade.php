@extends('layouts.app')
@section('content')
@if(Auth::user()->admin)
<a href="/motor/create">Create</a>
@endif
<a href="/motor?rent=0">No rent</a>
<table class="table table-striped">
  <tr>
    <th>ID</th>
    <th>Name</th> 
    
    <th>Year of Production</th>   

    <th>Km</th>
    <th>Price for day</th>
    <th>Rent</th>
    @if(Auth::user()->admin)
    <th>Actions</th>   
    @endif
  </tr>
  @foreach($motors as $motor) 
  <tr>
    <td>{{$motor->id}}</td>
  	<td>{{$motor->name}}
  	</td>
  	<td>{{$motor->year_of_production}}</td>
  	<td>{{$motor->km}}</td>
  	<td>{{$motor->price_for_day}}</td>
  	<td>{{$motor->rent}}</td>
    @if(Auth::user()->admin)
  	<td>
  		<a href="/motor/{{$motor->id}}/">View</a>
  		<a href="/motor/{{$motor->id}}/edit">Edit</a>
  		<a href="/motor/{{$motor->id}}/delete">Delete</a>
  	</td>
    @endif
  	
	{!! Form::close() !!}
  </tr>
  @endforeach 	
</table>
@endsection

