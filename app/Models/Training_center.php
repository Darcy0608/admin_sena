<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    use HasFactory;
    
    //Campos que se van a asignacion masiva
    protected $fillable = [
        'name',
        'location',

        'imagen_url',
        'imagen_public_id',
        ];


        
        public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }

}
