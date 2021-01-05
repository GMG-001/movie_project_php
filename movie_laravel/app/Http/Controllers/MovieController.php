<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieAddRequest;
use App\Models\Actor;
use App\Models\Movie;
use App\Models\Tag;
use App\Notifications\MovieAddNotification;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index(){
        $movies=Movie::with(['tags'])->get();
        return view('index',['movies'=>$movies
        ]);
    }

    public function ShowMovie($id){
        $actors=Actor::all();
        $movie=Movie::findOrFail($id);
        return view('show', compact('movie','actors'));
    }

    public function genre($id){
        $tag=Tag::findOrFail($id);
        return view('genre')->with('tag',$tag);
    }


    public function add_movie(){
        $tags = Tag::all();
        return view('add',compact('tags'));
    }


    public function add(MovieAddRequest $movieAddRequest){

        $movie=new Movie($movieAddRequest->all());


        if($movieAddRequest->hasFile('image')){
            $file=$movieAddRequest->file('image');
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
            "text"=>'ფილმი სახელიად'.'  '.$movie->name.'  '.'დაემატა საიტზე'
        ];
        $movie->save();
        $movie->tags()->attach($movieAddRequest->genres);
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
    public function update(Movie $movie){
        return view('update',compact('movie'));
    }

    public function update_save(MovieAddRequest $movieAddRequest, $id){

        $movie = Movie::findOrFail($id);
//        dd($movie);
        if($movieAddRequest->hasFile('image')){
            $file=$movieAddRequest->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('img/movies/', $filename);
            $movie->image=$filename;
        }else{
            abort(500);
        }
        $movie->update();
        return redirect()->back();
    }
}
