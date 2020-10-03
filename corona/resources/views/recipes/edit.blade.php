@extends('layouts.app')

@section('content')
<center><div class="bgsvg_pos" style="width: 40%; background-color: rgba(0, 0, 0, 0.1);" >
{!! Form::model($recipe, ['route' => ['recipes.update', ['id' => $recipe->id]], 'method' => 'PUT']) !!}	
<label class="description">Име на рецептата</label>
<p>{!! Form::text('name', $recipe->name, ['placeholder'=>'recipe name here', 'class'=>'form-control']) !!}</p>
<label class="description">Ниво на сложност</label>
<p></p>
	{!! Form::select('level_id', $levels_arr, $recipe->level->id) !!}
	<p>
		<label class="description">Вид основен продукт</label></p><p></p>
{!! Form::select('type_meal_id', $type_meals_arr, $recipe->type_meal->id) !!}
	<p></p>
	<label class="description">Описание</label>
	<p></p>
{!! Form::text('description', $recipe->description)!!}
<p></p>
<p></p>
	<label class="description">Валидност</label>
	<p></p>
{!! Form::text('is_valid', $recipe->is_valid)!!}
<p></p>
	{!! Form::submit('Изпрати!', ['class'=> 'btn btn-success']) !!}
{!! Form::close() !!}
</div></center>
@endsection


