<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Valoare extends Component
{
 

    public $cantitate;
    public $pret;
    public $valoare2;

    public function addTodo($cantitate, $pret , $valoare2)
{
    return $valoare2;

}


    public function render()
    {
        return view('livewire.valoare');
    }



}