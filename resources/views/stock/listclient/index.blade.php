@extends ('stock/templates/template')

@section ('content')

<h1 class="tittle-pg">Lista de Clientes</h1>

<a href="{{ route('list.create') }}" class="btn btn-primary"> Cadastrar
<span class="glyphicon glyphicon-plus"></span>
</a><br/><br/>

	<table border="2" class="table table-striped">
		<tr>
			<td>
				Nome
			</td>
			<td width="80">
				Sexo
			</td>
			<td width="80">
				RG
			</td>
			<td width="150">
				Ano de Nascimento
			</td>
			<td width="150">
				Data de Criação
			</td>
			<td width="150">
				Data de Atualização
			</td>
			<td width="50">
				Ações
			</td>
		</tr>
		@foreach ($clients as $client)
			<tr>
				<td>
					{{$client['name']}}
				</td>
				<td>
					{{$client['category']}}
				</td>
				<td>
					{{$client['rg']}}
				</td>
				<td>
					{{$client['born']}}
				</td>
				<td>
					{{$client['created_at']}}
				</td>
				<td>
					{{$client['updated_at']}}
				</td>
				<td>
					<a href="" class="actions edit">
					<span class="glyphicon glyphicon-pencil"></span>
					</a>
					<a href="" class="actions delete">
					<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>
			</tr>
		@endforeach
	</table>

@endsection