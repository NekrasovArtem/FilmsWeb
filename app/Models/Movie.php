<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_franchise',
        'rating_imdb',
        'rating_kp',
        'poster',
        'year',
        'country',
        'genre_id_one',
        'genre_id_two',
        'genre_id_three',
        'budget',
        'age',
        'time',
        'description',
        'trailer',
        'video',
        'episodes',
        'type'
    ];
}
