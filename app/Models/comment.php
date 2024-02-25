<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'text_comment',
        'img',
        'user_id'
    ];
    public function user() {
        return $this->belongsTo(user::class, 'user_id');
    }
}
