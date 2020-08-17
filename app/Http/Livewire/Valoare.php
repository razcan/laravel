<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contract;
use App\ContractDetail;
use Illuminate\Database\Migrations\Migration;

class Valoare extends Component
{


    public $new_contract;
    public $newContractDetail;
 

    public $cantitate;
    public $pret;

    public $qtty;
    public $price;
    public $value;
    public $inputContractNumber;
    public $inputPartner;
    public $inputCategory;
    public $inputStartDate;
    public $inputEndDate;
    public $item_name;
    public $idd;

//     public function addTodo($cantitate, $pret , $valoare2)
// {
//     return $valoare2;

// }

public function save_contract($inputContractNumber,$inputPartner,$inputStartDate,$inputEndDate,
$inputCategory,$item_name,$qtty,$price,$value)
{
    
 $this->value = $this->qtty * $this->price;

 //$this->idd = DB::select('select max(id)id from contracts');

 $this->idd = DB::select("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'test' AND TABLE_NAME = 'contracts'");

 //$this->idd = $this->idd +1;
//dd($this->idd[0]->AUTO_INCREMENT);

// dd($this->inputContractNumber,
// $this->inputPartner,$this->inputStartDate,$this->inputEndDate,
// $this->inputCategory,$this->item_name,$this->qtty,$this->price,$this->value);

    $contract = Contract::all();
    $new_contract = new Contract;
    $new_contract->Partner = $this->inputPartner;
    $new_contract->ContractNumber =  $this->inputContractNumber;
    $new_contract->ContractStartDate =  $this->inputStartDate;
    $new_contract->ContractEndDate =  $this->inputEndDate;
    $new_contract->ContractCategory =  $this->inputCategory;
    $new_contract->id =  $this->idd[0]->AUTO_INCREMENT;
    $new_contract->save();

    
   $newContractDetail = new ContractDetail;
   $newContractDetail->item_name =  $this->item_name;
   $newContractDetail->qtty =  $this->qtty;
   $newContractDetail->price =  $this->price;
   $newContractDetail->value =  $this->value;
   $newContractDetail->contract_id = $this->idd[0]->AUTO_INCREMENT;
   $newContractDetail->save();

}


public function mount()
    {

        // $this->fill(['valoare2' => 0]);

        //$this->valoare2 = request()->query('valoare2', $this->valoare2);

    }



    public function render()
    {
        return view('livewire.valoare');
    }



}