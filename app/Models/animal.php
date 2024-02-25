<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    protected $fillable = [
        'status',
        'users',
        'breed_id',
        'additionalInfo',
        'foundDate',
        'claim',
        'district'
    ];
    public function breeds_model() {
        return $this->belongsTo(breed::class, 'breed_id', 'id');
    }
    public function users_model() {
        return $this->belongsTo(User::class, 'users','id');
    }
    public function status_model() {
        return $this->belongsTo(status::class, 'status','id');
    }
    public function animal_Photo() {
        return $this->hasMany(fotoanimal::class, 'id_animal','id');
    }
}
