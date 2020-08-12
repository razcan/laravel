<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Valoare extends Component
{
 

    public $message;

    public $message2 = "Test";


    public function render()
    {
        return view('livewire.valoare');
    }
}

