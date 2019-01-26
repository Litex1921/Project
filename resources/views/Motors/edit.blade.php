@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!!Form::open(['route' => ['motor.update', $motor->id], 'method' => 'put'])!!}
  
  <div class="form-group">
    {!!Form::label('name', 'Name')!!}
    {!!Form::text('name', $motor->name, ['class' => 'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('year_of_production', 'Year of production')!!}
    {!!Form::text('year_of_production', $motor->year_of_production, ['class' => 'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('km', 'Km')!!}
    {!!Form::text('km', $motor->km, ['class' => 'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('price_for_day', 'Price for day')!!}
    {!!Form::text('price_for_day', $motor->price_for_day, ['class' => 'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('rent', 'Rent')!!}
    {!!Form::text('rent', $motor->rent, ['class' => 'form-control'])!!}
  </div>
  <button class="btn btn-primary" type="submit">Edit</button>
{!!Form::close()!!}
@endsection