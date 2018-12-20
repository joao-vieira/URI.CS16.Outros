@extends('app')

@section('content')
	<div class="container">
		<h1>Hábitos</h1>

		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Tipo</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($habitos as $hab)
					<tr>
						<td>{{ $hab->nome }}</td>
						<td>{{ $hab->descricao }}</td>
						<td>
							@if($hab->tp_habito == 'B') 
								<span>Bom</span>
							@elseif($hab->tp_habito == 'R') 
								<span>Ruim</span>
							@endif
						</td>
						<td>
							<a href="{{ route('habitos.edit', ['id' => $hab->id]) }}" class="btn-sm btn-success">Editar</a>
							<a href="{{ route('habitos.destroy', ['id' => $hab->id]) }}" class="btn-sm btn-danger">Remover</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
@endsection
