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

	{!!Form::label('name', 'Name')!!}
	{!!Form::text('name')!!} <br>

	{!!Form::label('year_of_production', 'Year of production')!!}
	{!!Form::text('year_of_production')!!} <br>

	{!!Form::label('km', 'Km')!!}
	{!!Form::text('km')!!} <br>

 {!!Form::label('price_for_day', 'Price for day')!!}
  {!!Form::text('price_for_day')!!} <br>

    {!!Form::label('rent', 'Rent')!!}
  {!!Form::text('rent')!!} <br>


	{!!Form::submit()!!}
{!!Form::close()!!}