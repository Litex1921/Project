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
{!!Form::model($models, ['route' => 'model.store'])!!}

	{!!Form::label('name', 'Name')!!}
	{!!Form::text('name', '', ['class' => 'form-control'])!!} <br>

	<button class="btn btn-primary" type="submit">Create</button>
{!!Form::close()!!}
@endsection