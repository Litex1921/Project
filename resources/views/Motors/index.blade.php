<a href="/motor/create">Create</a>
<a href="/motor/rent">No rent</a>
<table style="width:100%" border="1px solid black">
  <tr>
    <th>Name</th> 
    
    <th>Year of Production</th>   

    <th>Km</th>
    <th>Price for day</th>
    <th>Rent</th>
    <th>Actions</th>   
  </tr>
  @foreach($motors as $motor) 
  <tr>
  	<td>{{$motor->name}}
  	</td>
  	<td>{{$motor->year_of_production}}</td>
  	<td>{{$motor->km}}</td>
  	<td>{{$motor->price_for_day}}</td>
  	<td>{{$motor->rent}}</td>
  	<td>
  		<a href="/motor/{{$motor->id}}/">View</a>
  		<a href="/motor/{{$motor->id}}/edit">Edit</a>
  		<a href="javascript:void(0)" onclick="document.getElementById('delete{{$motor->id}}').submit()">Delete</a>
  	</td>
  	{!! Form::open(['route' => ['motor.destroy', $motor->id], 'method' => 'delete', 'id' => 'delete'.$motor->id])!!}
	{!! Form::close() !!}
  </tr>
  @endforeach 	
</table>


