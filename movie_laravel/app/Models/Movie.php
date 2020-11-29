<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'year',
        'genre',
        'duration',
        'sound',
        'director',
        'in_the_cast',
        'description',
        'movie_link',
        'image',

    ];
    public function search(){
        return Movie::where('year')->get();
    }

    public function getMovies(){
        return Movie::all();
    }
}
