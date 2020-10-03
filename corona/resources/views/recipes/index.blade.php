@extends('layouts.app')
@section('content')


<h1>Hola</h1>

	<center><div class="" style="width: 75%; margin-top: 10%">
<table  class="table table-hover" border="1" bgcolor="white" style="color: #5F9EA0;">

	@foreach( $recipes_all as $recipe )
		<tr>
			<td bgcolor="white">
				<label class="resultat" style="color: #5F9EA0;">{{ $recipe->name }}</label>
			</td>
			<td bgcolor="white">
				<label class="resultat" style="color: #5F9EA0;">{{$recipe->type_meal->name}}</label>
			</td>
			<td bgcolor="white">
				<label class="resultat" style="color: #5F9EA0;">{{$recipe->level->name}}</label>
			</td>
			<td bgcolor="white">
				<label class="resultat" style="color: #5F9EA0;">{{ $recipe->description }}</label>
			</td>
			<td bgcolor="white">
				<label class="resultat" style="color: #5F9EA0;">{{ $recipe->is_valid }}</label>
			</td>
			<td>
				<a href="{{ route('recipes.edit', ['id' => $recipe->id]) }}" class="btn btn-warning">Промени</a>
			</td>
				
			<td>
				<form method="POST" action="{{ route('recipes.destroy', $recipe->id) }}">
					{{ csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-danger">Изтрий</button>
				</form>
					
			</td>

			
		</tr>
	@endforeach
</table>
<a href="{{url('recipes/create')}}" class="btn btn-warning">Създай</a>
</div></center>


@endsection
