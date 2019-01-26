@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <tr>
    <th>Name</th>
</tr>
  <tr>
  	<td>{{$model->name}}
  	</td> 			
  </tr>
</table>
@endsection