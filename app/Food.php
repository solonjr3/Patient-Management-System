<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = "foods";

    protected $fillable = 
        [
            'food_category', 
            'food_allocated'
              
            
        ];
}
