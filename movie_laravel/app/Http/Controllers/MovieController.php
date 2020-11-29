<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use  Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies=Movie::all();
        return view('layouts.index',['movies'=>$movies
        ]);
    }

    public function ShowMovie($id){
        $movie=Movie::findOrFail($id);
        return view('layouts.show')->with('movie',$movie);
    }
    public function add_movie(){
        return view('layouts.add');
    }
    public function add(Request $request){
        $movie=new Movie($request->all());
        $request->hasFile('image');
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('img/movies/', $filename);
        $movie->image=$filename;

        $movie->save();
        return redirect()->back();
    }
}
