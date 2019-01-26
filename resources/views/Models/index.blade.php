@extends('layouts.app')
@section('content')
<a href="/model/create">Create</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th> 
      <th>Actions</th>  
    </tr>
  </thead>
  <tbody>
    @foreach($models as $model) 
    <tr>
    	<td>{{$model->name}}
    	</td>
    	  	<td>
    		<a href="/model/{{$model->id}}/">View</a>
    		<a href="/model/{{$model->id}}/edit">Edit</a>
    		<a href="javascript:void(0)" onclick="document.getElementById('delete{{$model->id}}').submit()">Delete</a>
    	</td>
    	{!! Form::open(['route' => ['model.destroy', $model->id], 'method' => 'delete', 'id' => 'delete'.$model->id])!!}
  	{!! Form::close() !!}
    </tr>
    @endforeach 	
  </tbody>
</table>
@endsection