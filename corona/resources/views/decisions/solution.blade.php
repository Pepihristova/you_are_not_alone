@extends('layouts.app')
@section('content')



<center><div class="" style="width: 75%; margin-top: 10%">
<table  class="table table-hover"  bgcolor="white" style="color: #fff;">

	@foreach( $solutions as $solution )
		<tr>
			<td bgcolor="white">
				<label class="resultat" style="color: #fff;">{{ $solution->name }}</label>
			</td>
			<td bgcolor="white">
				<label class="resultat" style="color: #fff;">{{$solution->type_meal->name}}</label>
			</td>
			<td bgcolor="white">
				<label class="resultat" style="color: #fff;">{{$solution->level->name}}</label>
			</td>
			<td bgcolor="white">
				<label class="resultat" style="color: #fff;">{{ $solution->description }}</label>
			</td>
			
			
		</tr>
	@endforeach
</table>
</div></center>
@endsection
