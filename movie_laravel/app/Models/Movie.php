<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table='movies';
    protected $fillable = [
        'name',
        'year',
        'duration',
        'sound',
        'director',
        'in_the_cast',
        'description',
        'movie_link',
        'image',

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }

}
