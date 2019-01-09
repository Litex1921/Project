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
  
  {!!Form::label('name', 'Name')!!}
  {!!Form::text('name', $motor->name)!!} <br>

  {!!Form::label('year_of_production', 'Year of production')!!}
  {!!Form::text('year_of_production', $motor->year_of_production)!!} <br>

  {!!Form::label('km', 'Km')!!}
  {!!Form::text('km', $motor->km)!!} <br>

  {!!Form::submit()!!}
{!!Form::close()!!}