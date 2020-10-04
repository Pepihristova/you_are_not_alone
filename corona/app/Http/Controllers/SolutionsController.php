<?php

namespace App\Http\Controllers;
use App\Models\Level;
use App\Models\Recipe;
use App\Models\TypeMeal;
use App\Models\User;
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index()
    {
        
        $level_id = request('level_id');
        $type_meal_id = request('type_meal_id');
        $solutions = Recipe::where([
       'level_id' => $level_id,
       'type_meal_id' => $type_meal_id,
      ])
      ->whereNotNull('is_valid')
      ->get();
        return view('decisions.solution', compact('level_id','type_meal_id','solutions'));
    }
}
