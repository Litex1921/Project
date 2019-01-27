@extends('layouts.app')
@section('content')
@if(Auth::user()->admin)
<a href="/model/create">Create</a>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th> 
      @if(Auth::user()->admin)
      <th>Actions</th>  
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach($models as $model) 
    <tr>
      <td>{{$model->id}}</td>
    	<td>{{$model->name}}
    	</td>
      @if(Auth::user()->admin)
    	  	<td>
    		<a href="/model/{{$model->id}}/">View</a>
    		<a href="/model/{{$model->id}}/edit">Edit</a>
    		<a href="/model/{{$model->id}}/delete">Delete</a>
    	</td>
      @endif
    </tr>
    @endforeach 	
  </tbody>
</table>
@endsection