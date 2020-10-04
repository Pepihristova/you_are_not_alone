@extends('layouts.app')
@section('content')



				<center><div class="box">	<div class="form-group">
                        <label class="col-md-12 control-label">Ниво на сложност на рецептата</label>
                        <div class="col-md-12" id="show">
                            {!! Form::select('level_id', $levels_arr, ['class' => 'form-control' ], ['id' => 'level_id']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label"> Вид основен продукт</label>
                        <div class="col-md-12" id="show">
                            {!! Form::select('type_meal_id', $type_meals_arr, ['class' => 'form-control' ], ['id' => 'type_meal_id']) !!}
                        </div>
                    </div>
                    <div class="col-sm-offset-4 col-sm-5">
                        <p id="demo" onclick="myFunction()" style="cursor: pointer; border: 1px solid #fff; padding 5px;">Продължи</p>
                    </div></div>
	</center>
@endsection
<script type="text/javascript">
    function myFunction() {
  var query = "/corona/public/decisions/solution";
              
              
              var q = document.getElementById("level_id");
              var level_id = q.options[q.selectedIndex].value;
              var p = document.getElementById("type_meal_id");
              var type_meal_id = p.options[p.selectedIndex].value;
              
               //console.log(area_id)
                //console.log(window.subarea_id)
                //console.log(type_id)
                //console.log(days)
                var string_url = "?level_id=" + level_id + '&type_meal_id=' + type_meal_id ;
                console.log(string_url)
        //window.location = query+string_url; // JQuery:  $("#menu").val();
              //console.log("Pepi e qka")
              window.location = query+string_url; // JQuery:  $("#menu").val();
            }



</script>