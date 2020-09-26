<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected $fillable = [
        'name', 'description', 'topic', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
