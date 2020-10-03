<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeMeal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function recipe()
    {
    	return $this->hasMany('App\Models\Recipe');
    }
}
