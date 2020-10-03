<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'type_meal_id', 'level_id', 'description', 'is_valid'
    ];
    public function type_meal()
    {
        return $this->belongsTo('App\Models\TypeMeal');
    }
    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }
}
