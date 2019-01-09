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
	{!!Form::text('name')!!} <br>

	{!!Form::submit()!!}
{!!Form::close()!!}