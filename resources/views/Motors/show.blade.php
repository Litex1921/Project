<table style="width:100%" border="1px solid black">
  <tr>
    <th>Name</th>
    <th>Year of Production</th> 
    <th>Km</th>
     <th>Rent</th>
    <th>Actions</th>   
  </tr>
  <tr>
  	<td>{{$motor->name}}
  	</td>
  	<td>{{$motor->year_of_production}}</td>
  	<td>{{$motor->km}}</td>
    <td>{{$motor->price_for_day}}</td>
    <td>{{$motor->rent}}</td>
  			
  </tr>
</table>