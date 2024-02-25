<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotoanimal extends Model
{
    protected $fillable = [
        'id_animal',
        'animalPhoto'
    ];
    public function animals_models() {
        return $this->belongsTo(animal::class,'id_animal','id');
    }
}
