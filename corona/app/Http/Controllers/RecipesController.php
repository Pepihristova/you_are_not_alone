<?php

namespace App\Http\Controllers;
use App\Models\Level;
use App\Models\Recipe;
use App\Models\TypeMeal;
use App\Models\User;
use App\Post;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$recipes = Recipe::where("is_valid", "=", NULL)->get();
        $recipes_all = Recipe::all();
        return view('recipes.index', compact('recipes_all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::all();
        $levels_arr = $levels->pluck('name','id');
        $type_meals = TypeMeal::all();
        $type_meals_arr = $type_meals->pluck('name','id');
        
        return view('recipes.create', compact('levels_arr', 'type_meals_arr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Recipe::create([
        'name' => $request->name,
        'type_meal_id' => $request->type_meal_id,
        'level_id' => $request->level_id,
        'description'=> $request->description
        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $recipe = Recipe::find($id);
        $levels = Level::all();
        $levels_arr = $levels->pluck('name','id');
        $type_meals = TypeMeal::all();
        $type_meals_arr = $type_meals->pluck('name','id');
        return view('recipes.edit', compact('levels_arr', 'type_meals_arr', 'recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $recipe = Recipe::find($id);

        $recipe->update([
            'name'=> $request->name,
            'type_meal_id' => $request->type_meal_id,
            'level_id' => $request->level_id,
            'description'=> $request->description,
            'is_valid'=> $request->is_valid,


        ]);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect()->route('home') ; 
    }
}
