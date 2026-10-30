<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    // Campos que se van a asignacion masiva
    protected $fillable = [
        'number',
        'brand',

        'imagen_url',
        'imagen_public_id',

    ];



    public function apprentices(){
        return $this->hasMany(Apprentice::class);
    }

    public function trainingEnvironment(){
        return $this->belongsTo(TrainingEnvironment::class);
    }
}
