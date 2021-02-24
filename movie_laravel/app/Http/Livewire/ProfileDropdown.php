<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileDropdown extends Component
{
    public function render()
    {
        $user=Auth::user();
        return view('livewire.profil-dropdown',compact('user'));
    }
}
