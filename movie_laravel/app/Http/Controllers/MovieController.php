<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Movie;
use App\Models\Tag;
use App\Notifications\MovieAddNotification;
use  Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index(){
        $movies=Movie::with(['tags'])->get();
        return view('layouts.index',['movies'=>$movies
        ]);
    }

    public function ShowMovie($id){
        $actors=Actor::all();
        $movie=Movie::findOrFail($id);
        return view('layouts.show', compact('movie','actors'));
    }

    public function genre($id){
        $tag=Tag::findOrFail($id);
        return view('genre')->with('tag',$tag);
    }


    public function add_movie(){
        $tags = Tag::all();
        return view('layouts.add',compact('tags'));
    }


    public function add(Request $request){

        $movie=new Movie($request->all());


        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('img/movies/', $filename);
            $movie->image=$filename;
        }else{
            abort(500);
        }
        $user=Auth::user();
        $movie->user_id=$user->id;
        $data=[
            "text"=>'movie with name of'.'  '.$movie->name.'  '.'has been added'
        ];
        $movie->save();
        $movie->tags()->attach($request->genres);
        $user->notify(new MovieAddNotification($data));
        return redirect()->back();
    }

    public function like(Movie $movie)
    {
        $user=Auth::user();
        if ($user->movies()->detach($movie)==true){
            $user->movies()->detach($movie);
        }else{
            $user->movies()->attach($movie);
        }

        return redirect()->back();
    }

    public function liked(){
        $user=Auth::user();
        return view('liked', compact('user'));
    }
    public function delete($id)
    {
        $post = Movie::findOrFail($id);
        $post->delete();
    }
}
