<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component


{

    public $name;
    public $email;
    
    public function render()
    {
        return view('livewire.test');
    }
}
