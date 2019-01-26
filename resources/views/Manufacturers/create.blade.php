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
{!!Form::model($manufacturers, ['route' => 'manufacturer.store'])!!}

    <div class="form-group">
    	{!!Form::label('name', 'Name')!!}
    	{!!Form::text('name', '', ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('date_of_create', 'Date of create')!!}
        {!!Form::text('date_of_create', '', ['class' => 'form-control'])!!}
    </div>
	<button class="btn btn-primary" type="submit">Edit</button>
{!!Form::close()!!}
@endsection