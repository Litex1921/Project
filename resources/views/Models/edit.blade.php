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
{!!Form::open(['route' => ['model.update', $model->id], 'method' => 'put'])!!}
  
  <div class="form-group">
    {!!Form::label('name', 'Name')!!}
    {!!Form::text('name', $model->name, ['class' => 'form-control'])!!} <br>
  </div>
  <button class="btn btn-primary" type="submit">Edit</button>
{!!Form::close()!!}
@endsection