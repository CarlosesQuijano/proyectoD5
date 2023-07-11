<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ShowUsers extends Component
{
    public $search;
    public function render()
    {

        $usuarios = User::where("name" , "LIKE", "%". $this->search . "%")
        ->orWhere("email","LIKE", "%". $this->search . "%")
        ->get();
        //$usuarios = User::all();
        return view('livewire.show-users', compact("usuarios"));
        
    }
}
