@extends('layouts.app')
@section('content')

<center><div class="box" style="width: 40%; background-color: rgba(0, 0, 0, 0.8);" >
	{!! Form::open(['route' => ['recipes.store']]) !!}	
	<label class="description">Име на рецептата</label>
	<p></p>
	{!! Form::text('name')!!}
	<p></p>
	<label class="description">Ниво на сложност</label>
	<p></p>
	{!! Form::select('level_id', $levels_arr) !!}
	<p></p>
	<label class="description">Тип основен продукт</label>
	<p></p>
	{!! Form::select('type_meal_id', $type_meals_arr) !!}
	<p></p>
	
	
<label class="description">Описание</label>
<p></p>
<textarea id="w3mission" name="description"></textarea>
	
	<p></p>
	{!!Form::submit('Въведи')!!}
	<a href="{{ url('/') }}" style="background-color: #fff; color: #FF3333;">Отказ</a>
	{!! Form::close() !!}
</div></center>
@endsection
