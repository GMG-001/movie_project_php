<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies=Movie::all();
        return view('layouts.index')->with('movies',$movies);
    }

    public function ShowMovie($id){
        $movie=Movie::findOrFail($id);
        return view('layouts.show')->with('movie',$movie);
    }}
