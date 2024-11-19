<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'rating',
        'genre',
        'date',
        'synopsis'
    ];
}
