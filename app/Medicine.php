<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = "medicines";

    protected $fillable = 
        [
            'medicine_name', 
            'medicine_quantity',
            // 'medicine_date'  
            
        ];
    
    // public function setMedicineDateAttribute($value)
    // {
    // $this->attributes['medicine_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    // }
}
