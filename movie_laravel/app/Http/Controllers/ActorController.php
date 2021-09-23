<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function show_actor(){
        $actors=Actor::all();
        return view('actor',compact('actors'));
    }

    public function add_actor1(){
        return view('actor_add');
    }

    public function add_actor(Request $request){
        $actor=new Actor($request->all());
        if($request->hasFile('actor_image')){
            $file=$request->file('actor_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('img/actors/', $filename);
            $actor->actor_image=$filename;
        }else{
            abort(500);
        }

        $actor->save();
        return redirect()->back();
    }
}
