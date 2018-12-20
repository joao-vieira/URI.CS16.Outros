@extends('app')

@section('content')
	<div class="container">
		<h1>Editando Histórico</h1>

		@if($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		@endif


		{!! Form::open(['route' => ['historicos.update', $historico->id], 'method' => 'put']) !!}

			{{-- Campo Habito_Id --}}
			<div class="form-group">
				{!! Form::label('habito_id', 'Hábito:') !!}
				{!! Form::select('habito_id', \App\Habito::orderBy('nome')->pluck('nome', 'id')->toArray(), $historico->habito_id, ['class' => 'form-control']) !!}
			</div>

			{{-- Campo Data --}}
			<div class="form-group">
				{!! Form::label('data', 'Data:') !!}
				{!! Form::text('data', $historico->data, ['class' => 'form-control']) !!}
			</div>

			{{-- Campo Hora --}}
			<div class="form-group">
				{!! Form::label('hora', 'Hora:') !!}
				{!! Form::text('hora', $historico->hora, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Editar Histórico', ['class' => 'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}

	</div>
@endsection