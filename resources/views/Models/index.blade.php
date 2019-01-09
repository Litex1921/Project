<a href="/model/create">Create</a>
<table style="width:100%" border="1px solid black">
  <tr>
    <th>Name</th>   
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
</table>
