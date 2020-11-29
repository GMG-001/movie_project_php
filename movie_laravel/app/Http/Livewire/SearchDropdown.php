<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search='';
    public function render()
    {
//        $searchResults=[];
        $searchResults= Movie::where('name','like', '%'.$this->search.'%')->get();
        return view('livewire.search-dropdown', [
            'searchResults'=>collect($searchResults)->take(7),
        ]);
    }
}
