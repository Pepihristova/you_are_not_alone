<?php

namespace App\Http\Controllers;
use App\Models\Level;
use App\Models\Recipe;
use App\Models\TypeMeal;
use App\Models\User;
use Illuminate\Http\Request;

class LevelsController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        $levels_arr = $levels->pluck('name','id');
        $type_meals = TypeMeal::all();
        $type_meals_arr = $type_meals->pluck('name','id');
        
        return view('decisions.choise', compact('levels_arr', 'type_meals_arr'));
    }
}
