<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class GenreDropdown extends Component
{
    public function render()
    {
        $genre=Tag::with(['movies'])->get();
        return view('livewire.genre-dropdown',compact('genre'));
    }
}
