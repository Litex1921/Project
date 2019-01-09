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
  
  {!!Form::label('name', 'Name')!!}
  {!!Form::text('name', $model->name)!!} <br>


  {!!Form::submit()!!}
{!!Form::close()!!}