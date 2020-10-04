<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::resource('/recipes', [App\Http\Controllers\RecipesController::]);

Route::get('/recipes', [App\Http\Controllers\RecipesController::class, 'index'])->name('recipes');
Route::get('recipes/create', [App\Http\Controllers\RecipesController::class, 'create']);
Route::get('recipes/edit', [App\Http\Controllers\RecipesController::class, 'edit'])->name('recipes.edit');
Route::post('/recipes',[App\Http\Controllers\RecipesController::class, 'store'])->name('recipes.store');
//Route::post('recipes/store', [App\Http\Controllers\RecipesController::class, 'store']);
//Route::resource('recipes', RecipesController::class);
Route::put('recipes/update',[App\Http\Controllers\RecipesController::class, 'update'])->name('recipes.update');
Route::delete('/recipes/{id}',[App\Http\Controllers\RecipesController::class, 'destroy'])->name('recipes.destroy');
Route::get('/decisions/choise', [App\Http\Controllers\LevelsController::class, 'index'])->name('choise');
Route::get('/decisions/solution', [App\Http\Controllers\SolutionsController::class, 'index'])->name('solution');