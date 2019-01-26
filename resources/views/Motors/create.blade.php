@extends('layouts.app')
@section('content')
Create view
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!!Form::model($motor, ['route' => 'motor.store'])!!}

    <div class="form-group">
    	{!!Form::label('name', 'Name')!!}
    	{!!Form::text('name', '', ['class' => 'form-control'])!!} 
    </div>
    <div class="form-group">
    	{!!Form::label('year_of_production', 'Year of production')!!}
    	{!!Form::text('year_of_production', '', ['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
    	{!!Form::label('km', 'Km')!!}
    	{!!Form::text('km', '', ['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('price_for_day', 'Price for day')!!}
        {!!Form::text('price_for_day', '', ['class' => 'form-control'])!!} 
    </div>
    <div class="form-group">
        {!!Form::label('rent', 'Rent')!!}
        {!!Form::text('rent', '', ['class' => 'form-control'])!!}
    </div>


	<button class="btn btn-primary" type="submit">Create</button>
{!!Form::close()!!}
@endsection