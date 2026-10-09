<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingEnvironment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'type',
        'capacity',
        'location',
        'status',
        'urlFoto'
    ];

    public function course(){
    return $this->hasOne(Course::class);
    }

    public function computers(){
    return $this->hasMany(Computer::class);
    }
}
