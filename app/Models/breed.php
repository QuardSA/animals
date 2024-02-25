<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class breed extends Model
{
    protected $fillable = [
        'title',
    ];
    public function animals_breed() {
        return $this->HasMany(animal::class, 'breed_id');
    }
}
