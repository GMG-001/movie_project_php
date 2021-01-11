<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search='';
    public function render()
    {
        $searchResults= Movie::where('name','like', '%'.$this->search.'%')->orWhere('year','like', '%'.$this->search.'%')->orWhere('duration','like', '%'.$this->search.'%')->orwhere('sound','like', '%'.$this->search.'%')->orWhere('director','like', '%'.$this->search.'%')->orWhere('in_the_cast','like', '%'.$this->search.'%')->orwhere('description','like', '%'.$this->search.'%')->get();
        return view('livewire.search-dropdown', [
            'searchResults'=>collect($searchResults)->take(7),
        ]);
    }
}
