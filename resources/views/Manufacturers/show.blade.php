@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <tr>
    <th>Name</th>
    <th>Date of Create</th>
  </tr>
  <tr>
  	<th>{{$manufacturer->name}}</th>
  	<th>{{$manufacturer->date_of_create}}</th>
  </tr>
</table>
@endsection